<?php

namespace App\Modules\EmailTempletes\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmailTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User Registration
        \DB::table('email_templetes')->insert([
            'user_id' => 1,
            'active' => 1
        ]);

        // Email Template Trans
        \DB::table('email_templetes_trans')->insert([
            'etemplate_id' => 1,
            'subject' => 'User Registration',
            'lang' => 'en',
            'html_content' => '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <style>
        table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
        div, td {padding:0;}
        div {margin:0 !important;}
    </style>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {
            font-family: Arial, sans-serif;
        }
        @media screen and (max-width: 530px) {
            .unsub {
                display: block;
                padding: 8px;
                margin-top: 14px;
                border-radius: 6px;
                background-color: #555555;
                text-decoration: none !important;
                font-weight: bold;
            }
            .col-lge {
                max-width: 100% !important;
            }
        }
        @media screen and (min-width: 531px) {
            .col-sml {
                max-width: 27% !important;
            }
            .col-lge {
                max-width: 73% !important;
            }
        }
    </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
<div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" align="center" style="width:600px;">
                    <tr>
                        <td>
                            <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                    <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                        <a href="#" style="text-decoration:none;"><img src="https://s.talentrack.in/uploads/acc_img/528/12/528012_6341cfbcabc29.jpg" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                                        <table role="presentation" width="100%">
                                            <tr>
                                                <td style="width:395px;padding-bottom:20px;" valign="top">
                                                    <div class="col-lge" style="width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                                        <p>Hi {{$FIRST_NAME}} {{$LAST_NAME}}</p>
                                                        <p>Welcome you {{$FIRST_NAME}} to {{$SITE_TITLE}} Family!</p>
                                                        <p style="margin:0;"><a href="{{$ACTIVATION_LINK}}" style="background: #fa5701; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#fa5701"><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><span style="mso-text-raise:10pt;font-weight:bold;">Activate Account</span><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i></a></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:30px;text-align:center;font-size:12px;background-color:#071C36;;color:#cccccc;">
                                        <p style="margin:0;font-size:14px;line-height:20px;">&reg; Anticasting 2023</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>',
            'template_key' => 'user-registration',
            'status' => 1
        ]);

           // Actor Registration
           \DB::table('email_templetes')->insert([
            'user_id' => 1,
            'active' => 1
        ]);

        // Email Template Trans
        \DB::table('email_templetes_trans')->insert([
            'etemplate_id' => 2,
            'subject' => 'Actor Registration',
            'lang' => 'en',
            'html_content' => '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <style>
        table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
        div, td {padding:0;}
        div {margin:0 !important;}
    </style>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {
            font-family: Arial, sans-serif;
        }
        @media screen and (max-width: 530px) {
            .unsub {
                display: block;
                padding: 8px;
                margin-top: 14px;
                border-radius: 6px;
                background-color: #555555;
                text-decoration: none !important;
                font-weight: bold;
            }
            .col-lge {
                max-width: 100% !important;
            }
        }
        @media screen and (min-width: 531px) {
            .col-sml {
                max-width: 27% !important;
            }
            .col-lge {
                max-width: 73% !important;
            }
        }
    </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
<div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" align="center" style="width:600px;">
                    <tr>
                        <td>
                            <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                    <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                        <a href="#" style="text-decoration:none;"><img src="https://s.talentrack.in/uploads/acc_img/528/12/528012_6341cfbcabc29.jpg" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                                        <table role="presentation" width="100%">
                                            <tr>
                                                <td style="width:395px;padding-bottom:20px;" valign="top">
                                                    <div class="col-lge" style="width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                                        <p>Hi {{$FIRST_NAME}} {{$LAST_NAME}}</p>
                                                        <p>Welcome you {{$FIRST_NAME}} to {{$SITE_TITLE}} Family!</p>
                                                        <p style="margin:0;"><a href="{{$ACTIVATION_LINK}}" style="background: #fa5701; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#fa5701"><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><span style="mso-text-raise:10pt;font-weight:bold;">Activate Account</span><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i></a></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:30px;text-align:center;font-size:12px;background-color:#071C36;;color:#cccccc;">
                                        <p style="margin:0;font-size:14px;line-height:20px;">&reg;  Anticasting 2023</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>',
            'template_key' => 'actor-registration',
            'status' => 1
        ]);

           // Forgot Password
           \DB::table('email_templetes')->insert([
            'user_id' => 1,
            'active' => 1
        ]);

        // Email Template Trans
        \DB::table('email_templetes_trans')->insert([
            'etemplate_id' => 3,
            'subject' => 'Forgot Password',
            'lang' => 'en',
            'html_content' => '<!DOCTYPE html>
            <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width,initial-scale=1">
                <meta name="x-apple-disable-message-reformatting">
                <title></title>
                <!--[if mso]>
                <style>
                    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
                    div, td {padding:0;}
                    div {margin:0 !important;}
                </style>
                <noscript>
                    <xml>
                        <o:OfficeDocumentSettings>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                        </o:OfficeDocumentSettings>
                    </xml>
                </noscript>
                <![endif]-->
                <style>
                    table, td, div, h1, p {
                        font-family: Arial, sans-serif;
                    }
                    @media screen and (max-width: 530px) {
                        .unsub {
                            display: block;
                            padding: 8px;
                            margin-top: 14px;
                            border-radius: 6px;
                            background-color: #555555;
                            text-decoration: none !important;
                            font-weight: bold;
                        }
                        .col-lge {
                            max-width: 100% !important;
                        }
                    }
                    @media screen and (min-width: 531px) {
                        .col-sml {
                            max-width: 27% !important;
                        }
                        .col-lge {
                            max-width: 73% !important;
                        }
                    }
                </style>
            </head>
            <body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
            <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
                <table role="presentation" style="width:100%;border:none;border-spacing:0;">
                    <tr>
                        <td align="center" style="padding:0;">
                            <table role="presentation" align="center" style="width:600px;">
                                <tr>
                                    <td>
                                        <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                            <tr>
                                                <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                                    <a href="#" style="text-decoration:none;"><img src="https://s.talentrack.in/uploads/acc_img/528/12/528012_6341cfbcabc29.jpg" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">

                                                    <table role="presentation" width="100%">
                                                        <tr>
                                                            <td style="width:395px;padding-bottom:20px;" valign="top">
                                                                <div class="col-lge" style="width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                                                    <p style="margin-top:0;margin-bottom:12px;">Hi {{$FIRST_NAME}} {{$LAST_NAME}}</p>
                                                                    <p style="margin-top:0;margin-bottom:18px;">Reset your password.</p>
                                                                    <p style="margin:0;"><a href="{{$RESET_LINK}}" style="background: #fa5701; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#fa5701"><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><span style="mso-text-raise:10pt;font-weight:bold;">Reset Password</span><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i></a></p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:30px;text-align:center;font-size:12px;background-color:#071C36;;color:#cccccc;">
                                                    <p style="margin:0;font-size:14px;line-height:20px;">&reg; Anticasting 2023</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            </body>
            </html>',
            'template_key' => 'forgot-password',
            'status' => 1
        ]);


            // Profile Update Alert
            \DB::table('email_templetes')->insert([
                'user_id' => 1,
                'active' => 1
            ]);

            // Email Template Trans
            \DB::table('email_templetes_trans')->insert([
                'etemplate_id' => 4,
                'subject' => 'Profile Update Alert',
                'lang' => 'en',
                'html_content' => '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="x-apple-disable-message-reformatting">
        <title></title>
        <!--[if mso]>
        <style>
            table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
            div, td {padding:0;}
            div {margin:0 !important;}
        </style>
        <noscript>
            <xml>
                <o:OfficeDocumentSettings>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
        </noscript>
        <![endif]-->
        <style>
            table, td, div, h1, p {
                font-family: Arial, sans-serif;
            }
            @media screen and (max-width: 530px) {
                .unsub {
                    display: block;
                    padding: 8px;
                    margin-top: 14px;
                    border-radius: 6px;
                    background-color: #555555;
                    text-decoration: none !important;
                    font-weight: bold;
                }
                .col-lge {
                    max-width: 100% !important;
                }
            }
            @media screen and (min-width: 531px) {
                .col-sml {
                    max-width: 27% !important;
                }
                .col-lge {
                    max-width: 73% !important;
                }
            }
        </style>
    </head>
    <body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
    <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
        <table role="presentation" style="width:100%;border:none;border-spacing:0;">
            <tr>
                <td align="center" style="padding:0;">
                    <table role="presentation" align="center" style="width:600px;">
                        <tr>
                            <td>
                                <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <tr>
                                        <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                            <a href="#" style="text-decoration:none;"><img src="https://s.talentrack.in/uploads/acc_img/528/12/528012_6341cfbcabc29.jpg" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                                            <table role="presentation" width="100%">
                                                <tr>
                                                    <td style="width:395px;padding-bottom:20px;" valign="top">
                                                        <div class="col-lge" style="width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                                            <p>Hi {{$FIRST_NAME}} {{$LAST_NAME}}</p>
                                                            <p>Welcome you {{$FIRST_NAME}} to {{$SITE_TITLE}} Family!</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:30px;text-align:center;font-size:12px;background-color:#071C36;;color:#cccccc;">
                                            <p style="margin:0;font-size:14px;line-height:20px;">&reg;  Anticasting 2023</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </body>
    </html>',
                'template_key' => 'profile-update-alert',
                'status' => 1
            ]);


    }

}
