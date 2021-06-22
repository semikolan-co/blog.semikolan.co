<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Mail</title>

   <!--Font Awesome-->
   <script src="https://kit.fontawesome.com/c5fe5e7547.js" crossorigin="anonymous"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
    
     :root {
        --Navy: #0a192f;
        --LightNavy: #112240;
        --LightestNavy: #233554;
        --Slate: #8892b0;
        --LightSlate: #a8b2d1;
        --LightestSlate: #ccd6f6;
        --White: #e6f1ff;
        --Green: #64ffda;
        --consolas: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }
    
    </style>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="650" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
						<td>
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<img src="https://drive.google.com/uc?export=view&id=1AAcT96GQGBJCU9Q8eor3GZFsGU9lyDdb" style="width: 100%;aspect-ratio:10/3;background:#0a192f">
								</tr>
							</table>
						</td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b>{{   isset($title) ? $title : 'Default Title for the Page'   }}</b>
                                    </td> 
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        {!! isset($body) ? $body : 'This will show the Body content' !!}<br>
                                         <a href="https://semikolan.co/" style="color:#153643;text-decoration:none;font-weight:bold">
                                          By Team SemiKolan
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#0a192f;padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ccd6f6;text-decoration:none; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                        Copyright &copy; 2020 <a style="color: #64ffda;text-decoration :none" href="https://semikolan.co">SemiKolan</a><br/>
                                    </td>
                                    <td align="right" width="25%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://linkedin.com/company/semikolan" style="width:100%">
														<img src="https://www.iconsdb.com/icons/preview/white/linkedin-3-xxl.png" width="100%" alt="">
                                                    </a>
                                                </
                                                >
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://linkedin.com/company/semikolan" style="width:100%">
    													<img src="https://www.iconsdb.com/icons/preview/white/instagram-6-xxl.png" width="100%" alt="">

                                                    </a>
                                                </td>


                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://linkedin.com/company/semikolan" style="width:100%">
    													<img src="https://www.iconsdb.com/icons/preview/white/github-9-xxl.png" width="100%" alt="">

                                                    </a>
                                                </td>


                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="https://linkedin.com/company/semikolan" style="width:100%">
    													<img src="https://www.iconsdb.com/icons/preview/white/youtube-xxl.png" width="100%" alt="">

                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>