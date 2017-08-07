<?php
  define("PAGINATION", 30);
  return [
    'key' => 'YOUR_KEY_HERE',
    'secret' => 'YOUR_SECRET_HERE',
    'credentials' => 'client_credentials',
    'cert_path' => './trusted/keytool_crt.pem',
    'target_url' => 'irscstaging.blackboard.com',
    'api' => [
        'base' => [
            'path' => '/learn/api/public/v1/'
        ],
        'announcements' => [
            'path' => '/learn/api/public/v1/announcements',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'title,body,showAtLogin,showInCourses,availability,id'
            ],
            'replace' => '[announcementId]'
        ],
        'courses' => [
            'path' => '/learn/api/public/v1/courses',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'externalId,courseId,name,availability,id'
            ],
            'replace' => '[courseId]'
        ],
        'contents' => [
            'path' => '/learn/api/public/v1/courses/[courseId]/contents',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'id,parentId,title,body,description,created,availability'
            ],
            'replace' => '[courseId]'
        ],
        'users' => [
            'path' => '/learn/api/public/v1/users',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'id,uuid,externalId,userName,name'
            ],
            'replace' => '[userId]'
        ],
        'terms' => [
            'path' => '/learn/api/public/v1/terms',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'externalId,name'
            ],
            'replace' => '[termId]'
        ],
        'systems' => [
            'path' => '/learn/api/public/v1/system/version',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => ''
            ],
            'replace' => '[systemId]'
        ],
        'memberships' => [
            'path' => '/learn/api/public/v1/courses/[courseId]/users',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'externalId,availability'
            ],
            'replace' => '[courseId]'
        ],
        'grades' => [
            'path' => '/learn/api/public/v1/courses/[courseId]/gradebook/columns',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => ''
            ],
            'replace' => '[courseId]'
        ],
        'datasources' => [
            'path' => '/learn/api/public/v1/dataSources',
            'params' => [
                'offset' => 0,
                'limit' => PAGINATION,
                'fields' => 'externalId,name'
            ],
            'replace' => ''
        ],
        'set_token' => [
            'path' => '/learn/api/public/v1/oauth2/token'
        ],
        'revoke_token' => [
            'path' => '/learn/api/public/v1/oauth2/revoke'
        ],
    ],
    'payload' => [
        'grant_type' => 'client_credentials',
        'token' => null,
        'expires_at' => ''
    ],
    'token' => null,
    'json_options' => [
        'indent' => 4,
        'separators' => [',', ' => ']
    ]
  ];
