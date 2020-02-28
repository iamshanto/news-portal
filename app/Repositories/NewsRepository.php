<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class NewsRepository extends BaseRepository
{
    public function getAll($param = [], $paidMember = 0, $perPage = 10)
    {
        $news = DB::table('news')
            ->select(['news.*'])
            ->leftJoin('authors', 'authors.id', '=', 'news.author_id');
        if ($paidMember == 0) {
            $news->where('authors.is_professional', 0);
        }

        if (isset($param['professional']) && $param['professional'] == 1) {
            $news->where('authors.is_professional', 1);
        }
        if (isset($param['category_id'])) {
            $news->where('news.category_id', $param['category_id']);
        }
        if (isset($param['title'])) {
            $news->where('news.title', 'like', "%{$param['title']}%");
        }
        if (isset($param['date'])) {
            $news->whereDate('news.created_at', $param['date']);
        }

        return $news->paginate($perPage);
    }
}
