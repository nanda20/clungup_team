<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
           display: none !important;
           opacity: 0.01 !important;
       }
       /* If the above doesn't work, add a .g-img class to any image in question. */
       img.g-img + div {
           display: none !important;
       }

       /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            .email-container {
                min-width: 414px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
            }
        }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #222222; text-align: left;">
    <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#222222">
    <tr>
    <td>
    <![endif]-->

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
        <!-- Preview Text Spacing Hack : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
	        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!-- Email Header : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 20px 0; text-align: center">
                    <img src="https://lh4.googleusercontent.com/dZKwz6FJ2u3gUDYwlCjqHM50mf2DNYw2mfelbrQ6l3PHCgonL18xpBqCotDUHCi5rd6ih2maGcufligToILl=w1366-h637" width="292" height="252" alt="Clungup Mangroove Conservation" border="0" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
                </td>
            </tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

            <!-- Hero Image, Flush : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" align="center">
                    <img src="<?= base_url("assets/dummy/dummy.jpg") ?>" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img">
                </td>
            </tr>
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text + Button : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #ff0000; font-weight: normal;">Pesanan anda telah dibatalkan</h1>
                    <div>Karena anda belum membayar sesuai tanggal yang ditentukan</div>
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
                    <p style="margin: 0;">
                    	<center>
							<div style="border:1px solid #555555;width:200px;padding:10px;">Kode booking<br><b><?= $booking_code ?></b></div>
						</center>		
						<br>
                    	<table border="1" cellpadding="5">
							<tr>
								<td align="left">Nama Koordinator</td>
								<td><?= $name ?></td>
							</tr>
							<tr>
								<td align="left">Email</td>
								<td><?= $email ?></td>
							</tr>
							<tr>
								<td align="left">Contact Person</td>
								<td><?= $contact ?></td>
							</tr>
							<tr>
								<td align="left">Kota</td>
								<td><?= $kota ?></td>
							</tr>
							<tr>
								<td align="left">Tgl. Masuk</td>
								<td><?= format_tgl($booking_date_start) ?></td>
							</tr>
							<tr>
								<td align="left">Tgl. Keluar</td>
								<td><?= format_tgl($booking_date_end) ?></td>
							</tr>
							<tr>
								<td align="left">Jam Datang</td>
								<td><?= $time_of_arrival ?> WIB</td>
							</tr>
							<tr>
								<td align="left">Jumlah Anggota</td>
								<td><?= $quantity ?> orang</td>
							</tr>
							<tr>
								<td align="left">Jumlah yang harus dibayarkan</td>
								<td><?= "Rp. ".number_format($payment,0,'-','.').",-" ?></td>
							</tr>							
						</table>
                    </p>
                </td>
            </tr>
            <!-- 1 Column Text + Button : END -->

            <!-- Background Image with Text : BEGIN -->
            <tr>
                <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                <td background="http://placehold.it/600x230/222222/666666" bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">
	                <!--[if gte mso 9]>
	                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:175px; background-position: center center !important;">
	                <v:fill type="tile" src="http://placehold.it/600x230/222222/666666" color="#222222" />
	                <v:textbox inset="0,0,0,0">
	                <![endif]-->	                
	                <!--[if gte mso 9]>
	                </v:textbox>
	                </v:rect>
	                <![endif]-->
	            </td>
	        </tr>
	        <!-- Background Image with Text : END -->
	        

	    </table>
	    <!-- Email Body : END -->

	    <!-- Email Footer : BEGIN -->
	    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
	        <tr>
	            <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">
	                <webversion style="color: #cccccc; text-decoration: underline; font-weight: bold;">View as a Web Page</webversion>
	                <br><br>
	                Clungup Mangrove Conservation<br>Pantai Malang Selatan. <br>(123) 456-7890	                	               
	            </td>
	        </tr>
	    </table>
	    <!-- Email Footer : END -->

	    <!-- Full Bleed Background Section : BEGIN -->
	    <table role="presentation" bgcolor="#709f2b" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
	        <tr>
	            <td valign="top" align="center">
	                <div style="max-width: 600px; margin: auto;" class="email-container">
	                    <!--[if mso]>
	                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
	                    <tr>
	                    <td>
	                    <![endif]-->
	                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
	                        <tr>
	                            <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #ffffff;">
	                                <p style="margin: 0;">Terima kasih telah melakukan pemesanan.</p>
	                            </td>
	                        </tr>
	                    </table>
	                    <!--[if mso]>
	                    </td>
	                    </tr>
	                    </table>
	                    <![endif]-->
	                </div>
	            </td>
	        </tr>
	    </table>
	    <!-- Full Bleed Background Section : END -->

    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>
</html>

<?php
function format_tgl($tanggal) {
	$bulan = array('Bulan', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Novermber', 'Desember');

	$cal = explode("-",$tanggal);
	$tgl = $cal[2];
	$bln = $cal[1];
	$thn = $cal[0];

	for ($i=0; $i < 13; $i++) { 
		if ($bln==$i) {
			$bln=$bulan[$i];
		}
	}

	echo "$tgl $bln $thn";
}
?>