# apurva
my first repository
 rename package name to apurva in vendor/
# add this line in your config/app 
'providers' => [
Apurva\Mypackage\MypackageServiceProvider::class
]

# add following code in your main composer file
"autoload": {
    "classmap": [
        "database/seeds",
        "database/factories"
    ],
    "psr-4": {
        "App\\": "app/",
        "Apurva\\\Mypackage\\\\": "packages/apurva/mypackage/src"
    }
},
