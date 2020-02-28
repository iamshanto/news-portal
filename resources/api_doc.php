<?php
/**
 * @api {post} /customer/register 1. Register
 * @apiName Register
 * @apiGroup Customer

 *
 * @apiParam {String} name Customer Name.
 * @apiParam {String} email Customer Email.
 * @apiParam {String} password Password.
 * @apiParam {String} password_confirmation Confirm Password.
 * @apiParam {String} is_paid Customer is paid or not.
 *
 * @apiSuccess {String} customer Customer Info.
 * @apiSuccess {String} message="CREATED" Message.
 *
 * @apiError (Error 422) Error Validation Error.
 */

/**
 * @api {post} /customer/login 2. Login
 * @apiName Login
 * @apiGroup Customer

 *
 * @apiParam {String} email Customer Email.
 * @apiParam {String} password Customer Password.
 *
 * @apiSuccess {String} token Access Token.
 * @apiSuccess {String} token_type="Bearer" Token Type.
 * @apiSuccess {String} expires_in Expire Time in Second.

 * @apiError (Error 422) Error Validation Error.
 * @apiError (Error 401) Error Username or Password Incorrect.
 */

/**
 * @api {get} /news 3. Get News
 * @apiName News
 * @apiGroup Customer

 *
 * @apiParam {String} [category_id] Category ID.
 * @apiParam {String} [title] Title.
 * @apiParam {String} [date] News Date i.e 2020-01-01.
 * @apiParam {Integer} [professional] Professional news only i.e 1 or 0.
 *
 * @apiSuccess {String} current_page Current Page URL.
 * @apiSuccess {String} data Array of News.
 * @apiSuccess {String} first_page_url First Page URL.
 * @apiSuccess {String} from
 * @apiSuccess {String} last_page
 * @apiSuccess {String} last_page_url
 * @apiSuccess {String} next_page_url
 * @apiSuccess {String} path
 * @apiSuccess {String} per_page
 * @apiSuccess {String} prev_page_url

 * @apiError (Error 401) Error Invalid token
 */

/** ============================================ */

/**
 * @api {post} /author/register 1. Register
 * @apiName Register
 * @apiGroup Author

 *
 * @apiParam {String} name Author Name.
 * @apiParam {String} email Author Email.
 * @apiParam {String} password Password.
 * @apiParam {String} password_confirmation Confirm Password.
 * @apiParam {String} is_professional Author is pro or not.
 *
 * @apiSuccess {String} customer Author Info.
 * @apiSuccess {String} message="CREATED" Message.
 *
 * @apiError (Error 422) Error Validation Error.
 */

/**
 * @api {post} /author/login 2. Login
 * @apiName Login
 * @apiGroup Author

 *
 * @apiParam {String} email Author Email.
 * @apiParam {String} password Author Password.
 *
 * @apiSuccess {String} token Access Token.
 * @apiSuccess {String} token_type="Bearer" Token Type.
 * @apiSuccess {String} expires_in Expire Time in Second.

 * @apiError (Error 422) Error Validation Error.
 * @apiError (Error 401) Error Username or Password Incorrect.
 */

/**
 * @api {post} /author/news 3. Create News
 * @apiName News
 * @apiGroup Author

 *
 * @apiParam {String} [category_id] Category ID.
 * @apiParam {String} [title] Title.
 * @apiParam {String} [content] Content.
 *
 * @apiSuccess {String} title News Title.
 * @apiSuccess {String} content News Content.
 * @apiSuccess {String} category_id Category Id.
 * @apiSuccess {Integer} author_id Author ID
 * @apiSuccess {String} updated_at updated datetime
 * @apiSuccess {String} created_at created datetime
 * @apiSuccess {Integer} id news id

 * @apiError (Error 401) Error Invalid token
 * @apiError (Error 422) Error Validation Error
 */
