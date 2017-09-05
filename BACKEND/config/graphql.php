<?php declare(strict_types=1);


return [

    // The prefix for routes
    'prefix' => 'graphql',

    // The routes to make GraphQL request. Either a string that will apply
    // to both query and mutation or an array containing the key 'query' and/or
    // 'mutation' with the according Route
    //
    // Example:
    //
    // Same route for both query and mutation
    //
    // 'routes' => 'path/to/query/{graphql_schema?}',
    //
    // or define each routes
    //
    // 'routes' => [
    //     'query' => 'query/{graphql_schema?}',
    //     'mutation' => 'mutation/{graphql_schema?}',
    //     'mutation' => 'graphiql'
    // ]
    //
    // you can also disable routes by setting routes to null
    //
    // 'routes' => null,
    //
    'routes' => '{graphql_schema?}',

    // The controller to use in GraphQL request. Either a string that will apply
    // to both query and mutation or an array containing the key 'query' and/or
    // 'mutation' with the according Controller and method
    //
    // Example:
    //
    // 'controllers' => [
    //     'query' => '\Folklore\GraphQL\GraphQLController@query',
    //     'mutation' => '\Folklore\GraphQL\GraphQLController@mutation'
    // ]
    //
    'controllers' => \Folklore\GraphQL\GraphQLController::class.'@query',
    
    // The name of the input that contain variables when you query the endpoint.
    // Some library use "variables", you can change it here. "params" will stay
    // the default for now but will be changed to "variables" in the next major
    // release.
    'variables_input_name' => 'params',

    // Any middleware for the graphql route group
    'middleware' => [],
    
    // Config for GraphiQL (https://github.com/graphql/graphiql).
    // To disable GraphiQL, set this to null.
    'graphiql' => [
        'routes' => '/graphiql',
        'middleware' => [],
        'view' => 'graphql::graphiql'
    ],

    // The name of the default schema used when no argument is provided
    // to GraphQL::schema() or when the route is used without the graphql_schema
    // parameter.
    'schema' => 'default',

    'schemas' => [
        'default' => [
            'query' => [
                'Auteurs' => App\GraphQL\Queries\AuteursQuery::class,
                'Activites' => App\GraphQL\Queries\ActivitesQuery::class,
                'Actualites' => App\GraphQL\Queries\ActualitesQuery::class,
                'Evenements' => App\GraphQL\Queries\EvenementsQuery::class,
                'Galeries' => App\GraphQL\Queries\GaleriesQuery::class,
                'Messages' => App\GraphQL\Queries\MessagesQuery::class,
                'Pensees' => App\GraphQL\Queries\PenseesQuery::class,
                'Sliders' => App\GraphQL\Queries\SlidersQuery::class,
                'Utilisateurs' => App\GraphQL\Queries\UtilisateursQuery::class,
            ],
            'mutation' => [
                'auteur_update' => \App\GraphQL\Mutations\AuteurUpdate::class,
            ]
        ]
    ],

    'types' => [
        'Auteur' => App\GraphQL\Types\AuteurType::class,
        'Activite' => App\GraphQL\Types\ActiviteType::class,
        'Actualite' => App\GraphQL\Types\ActualiteType::class,
        'Evenement' => App\GraphQL\Types\EvenementType::class,
        'Galerie' => App\GraphQL\Types\GalerieType::class,
        'Pensee' => App\GraphQL\Types\PenseeType::class,
        'Slider' => App\GraphQL\Types\SliderType::class,
        'Message' => App\GraphQL\Types\MessageType::class,
        'Utilisateur' => App\GraphQL\Types\UtilisateurType::class,
    ],

    // This callable will received every Error objects for each errors GraphQL catch.
    // The method should return an array representing the error.
    //
    // Typically:
    // [
    //     'message' => '',
    //     'locations' => []
    // ]
    //
    'error_formatter' => [\Folklore\GraphQL\GraphQL::class, 'formatError'],

    // Options to limit the query complexity and depth. See the doc
    // @ https://github.com/webonyx/graphql-php#security
    // for details. Disabled by default.
    'security' => [
        'query_max_complexity' => null,
        'query_max_depth' => null
    ]
];
