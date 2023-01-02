<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{config('app.name')}}</title>
    <style>
        body {
            width: 100% !important;
            margin: 0;
            line-height: 1.4;
            background-color: #F2F4F6;
            color: #74787E;
            -webkit-text-size-adjust: none;
        }

        .email-body {
            width: 600px;
            margin: 0 auto;
        }

        .button {
            background-color: #b70f1b !important;
            padding: 10px 0px;
            display: block;
            color: #FFF !important;
            text-align: center;
            width: 100% !important;
            text-decoration: none;
            border-radius: 3px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
            -webkit-text-size-adjust: none;
        }

        /*Media Queries ------------------------------ */

        @media only screen and (max-width: 600px) {
            .email-body {
                width: 100% !important;
            }
        }

    </style>
</head>

<body>

<table width="600" border="0" cellspacing="0" cellpadding="0" class="email-body">
    <tbody>
    <tr>
        <td bgcolor="#ffffff">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="10">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td align="center">
                        <img style="width:200px" src="{{ asset('admin_asset/images/logo.png') }}">

                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="10">&nbsp;</td>
                </tr>
                </tbody>
            </table>

        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="10">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>
                        <table width="100%" border="1" cellspacing="0" cellpadding="5" class="email-body">
                            <tbody>
                            <tr>
                                <td width="150" valign="top"><span style="font-family: Arial,
     'Helvetica Neue', Helvetica, sans-serif; font-size: 14px; color: #000;">subject</span></td>
                                <td valign="top"><span style="font-family: Arial, 'Helvetica Neue',
     Helvetica, sans-serif; font-size: 14px; color: #000;">Contact Form Enquiry</span></td>
                            </tr>

                            <tr>
                                <td width="150" valign="top"><span style="font-family: Arial,
     'Helvetica Neue', Helvetica, sans-serif; font-size: 14px; color: #000;">Name</span></td>
                                <td valign="top"><span style="font-family: Arial, 'Helvetica Neue',
     Helvetica, sans-serif; font-size: 14px; color: #000;">{{ $name }}</span></td>
                            </tr>

                            <tr>
                                <td width="150" valign="top"><span style="font-family: Arial,
     'Helvetica Neue', Helvetica, sans-serif; font-size: 14px; color: #000;">Email</span></td>
                                <td valign="top"><span style="font-family: Arial, 'Helvetica Neue',
     Helvetica, sans-serif; font-size: 14px; color: #000;">{{ $email }}</span></td>
                            </tr>

                            <tr>
                                <td width="150" valign="top"><span style="font-family: Arial,
     'Helvetica Neue', Helvetica, sans-serif; font-size: 14px; color: #000;">Message</span></td>
                                <td valign="top"><span style="font-family: Arial,
    'Helvetica Neue', Helvetica, sans-serif; font-size: 14px; color: #000;">{{ $msg }}</span></td>
                            </tr>


                            </tbody>
                        </table>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="10">&nbsp;</td>
                </tr>
                </tbody>
            </table>


        </td>
    </tr>


    <tr>
        <td bgcolor="#ccc">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td width="10" style="font-size: 12px">&nbsp;</td>
                    <td style="font-size: 12px">&nbsp;</td>
                    <td width="10" style="font-size: 12px">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10">&nbsp;</td>
                    <td align="center"><span
                            style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size:12px; color: #000;">
			&copy; {{ config('app.name') }}. All rights reserved.<br>
<br>
		</span>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
                <tr>
                    <td width="10" style="font-size: 12px">&nbsp;</td>
                    <td style="font-size: 12px">&nbsp;</td>
                    <td width="10" style="font-size: 12px">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    </tbody>
</table>

</body>
</html>
