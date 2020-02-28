define({ "api": [
  {
    "type": "post",
    "url": "/author/login",
    "title": "2. Login",
    "name": "Login",
    "group": "Author",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Author Email.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Author Password.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Access Token.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "token_type",
            "defaultValue": "Bearer",
            "description": "<p>Token Type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "expires_in",
            "description": "<p>Expire Time in Second.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 422": [
          {
            "group": "Error 422",
            "optional": false,
            "field": "Error",
            "description": "<p>Validation Error.</p>"
          }
        ],
        "Error 401": [
          {
            "group": "Error 401",
            "optional": false,
            "field": "Error",
            "description": "<p>Username or Password Incorrect.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Author"
  },
  {
    "type": "post",
    "url": "/author/news",
    "title": "3. Create News",
    "name": "News",
    "group": "Author",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "category_id",
            "description": "<p>Category ID.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "title",
            "description": "<p>Title.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "content",
            "description": "<p>Content.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": "<p>News Title.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "content",
            "description": "<p>News Content.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "category_id",
            "description": "<p>Category Id.</p>"
          },
          {
            "group": "Success 200",
            "type": "Integer",
            "optional": false,
            "field": "author_id",
            "description": "<p>Author ID</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "updated_at",
            "description": "<p>updated datetime</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "created_at",
            "description": "<p>created datetime</p>"
          },
          {
            "group": "Success 200",
            "type": "Integer",
            "optional": false,
            "field": "id",
            "description": "<p>news id</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 401": [
          {
            "group": "Error 401",
            "optional": false,
            "field": "Error",
            "description": "<p>Invalid token</p>"
          }
        ],
        "Error 422": [
          {
            "group": "Error 422",
            "optional": false,
            "field": "Error",
            "description": "<p>Validation Error</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Author"
  },
  {
    "type": "post",
    "url": "/author/register",
    "title": "1. Register",
    "name": "Register",
    "group": "Author",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Author Name.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Author Email.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Password.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password_confirmation",
            "description": "<p>Confirm Password.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "is_professional",
            "description": "<p>Author is pro or not.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "customer",
            "description": "<p>Author Info.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "defaultValue": "CREATED",
            "description": "<p>Message.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 422": [
          {
            "group": "Error 422",
            "optional": false,
            "field": "Error",
            "description": "<p>Validation Error.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Author"
  },
  {
    "type": "post",
    "url": "/customer/login",
    "title": "2. Login",
    "name": "Login",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Customer Email.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Customer Password.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Access Token.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "token_type",
            "defaultValue": "Bearer",
            "description": "<p>Token Type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "expires_in",
            "description": "<p>Expire Time in Second.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 422": [
          {
            "group": "Error 422",
            "optional": false,
            "field": "Error",
            "description": "<p>Validation Error.</p>"
          }
        ],
        "Error 401": [
          {
            "group": "Error 401",
            "optional": false,
            "field": "Error",
            "description": "<p>Username or Password Incorrect.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Customer"
  },
  {
    "type": "get",
    "url": "/news",
    "title": "3. Get News",
    "name": "News",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "category_id",
            "description": "<p>Category ID.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "title",
            "description": "<p>Title.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "date",
            "description": "<p>News Date i.e 2020-01-01.</p>"
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "professional",
            "description": "<p>Professional news only i.e 1 or 0.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "current_page",
            "description": "<p>Current Page URL.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>Array of News.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "first_page_url",
            "description": "<p>First Page URL.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "from",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "last_page",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "last_page_url",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "next_page_url",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "path",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "per_page",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "prev_page_url",
            "description": ""
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 401": [
          {
            "group": "Error 401",
            "optional": false,
            "field": "Error",
            "description": "<p>Invalid token</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Customer"
  },
  {
    "type": "post",
    "url": "/customer/register",
    "title": "1. Register",
    "name": "Register",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Customer Name.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>Customer Email.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>Password.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password_confirmation",
            "description": "<p>Confirm Password.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "is_paid",
            "description": "<p>Customer is paid or not.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "customer",
            "description": "<p>Customer Info.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "defaultValue": "CREATED",
            "description": "<p>Message.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 422": [
          {
            "group": "Error 422",
            "optional": false,
            "field": "Error",
            "description": "<p>Validation Error.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "resources/api_doc.php",
    "groupTitle": "Customer"
  }
] });
