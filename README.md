

# Payment System (OOP + SOLID + Design Patterns)

المشروع ده بيحاكي نظام دفع بسيط باستخدام:
- OOP
- SOLID Principles
- Design Patterns (Strategy - Factory - Facade - Observers)

## الهدف
إننا نبني سيستم قابل للتوسيع:
نقدر نضيف طرق دفع جديدة بدون ما نعدل الكود القديم



## شرح ال Composer

## قبل Composer

كنا بنعمل:

require_once 'file1.php';
require_once 'file2.php';
require_once 'file3.php';


المشكلة:
كل شوية تضيف require
لو نسيت واحد → Error
كود مش نظيف



## بعد Composer (Autoload)

# يعني ايه Autoload؟

-- نظام بيحمل الكلاسات تلقائيًا لما تستخدمها


##  Composer بيعمل ايه؟

Composer:
بيقرأ composer.json
بيبني mapping بين:
- namespace
- folder

// مثال

    {
        "autoload": {
            "psr-4": {
                "App\\": "app/"
            }
        }
    }


Namespace => App\
Folder => app/

- يعني لما تعمل كدة use App\Factories\PaymentFactory;  Composer يروح يدور على: app/Factories/PaymentFactory.php


بس  لازم تعمل composer dump-autoload
