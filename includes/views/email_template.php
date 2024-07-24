<? 
require_once('./../../database.php');
?>
<!DOCTYPE html>
<html>
  <body>
    <div style="word-spacing:normal;background-color:#ffffff"> 
      <div  style="background-color:#ffffff">
        <div>
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
            <tbody>
              <tr>
                <td>
                  <div style="margin:0px auto;max-width:600px">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                      <tbody>
                        <tr>
                          <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                            <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:0px 0px 0px 0px;max-width:600px">
                              <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;border-radius:0px 0px 0px 0px">
                                <tbody>
                                  <tr>
                                    <td style="border:solid 29px <?echo $g_primaryColor;?>;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center">
                                      <div>
										<!-- header -->
                                        <div style="display:table;table-layout:fixed;width:100%">
                                          <div style="display:table-cell;vertical-align:top;width:100%">
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td style="font-size:0px;word-break:break-word">
                                                              <div style="height:20px;line-height:20px">&hairsp;</div>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:40px;padding-bottom:32px;padding-left:40px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td align="center" style="font-size:0px;word-break:break-word">
                                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px">
                                                                <tbody>
                                                                  <tr>
                                                                    <td style="border:0;padding:0px 0px 0px 0px;width:100px" valign="top">
                                                                      <a href="<?echo $projectUrl;?>" target="_blank">
																	  <img src="<? echo $g_modules_global['logo']?>" 
																	  style="display:block;outline:none;text-decoration:none;height:auto;font-size:13px;" 
																	  width="150px"  data-bit="iit">
																	  </a>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
										<!-- body -->
                                        <div style="display:table;table-layout:fixed;width:100%">
                                          <div style="display:table-cell;vertical-align:top;width:100%">
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td align="center" style="font-size:0px;word-break:break-word">
                                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px">
                                                                <tbody>
                                                                  <tr>
                                                                    
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td align="left" style="font-size:0px;padding:0px;padding-top:9px;padding-right:40px;padding-bottom:9px;padding-left:40px;word-break:break-word">
                                                              <div style="font-family:'Helvetica Neue',Arial;font-size:14px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.5;text-align:left;color:#242424">
                                                                <h1 style="text-align:center">
                                                                  <span><? echo $_GET['subject']; ?></span>
                                                                </h1>
                                                                <h1 style="text-align:center">
                                                                  <span style="font-size:16px;font-weight:400">
																	<? echo $_GET['message']; ?>
																  </span>
                                                                </h1>
                                                              </div>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div> 
                                           </div>
                                        </div>
										<!-- hr -->
                                        <div style="display:table;table-layout:fixed;width:100%">
                                          <div style="display:table-cell;vertical-align:top;width:100%">
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td align="center" style="font-size:0px;padding:0px;word-break:break-word">
                                                              <p style="padding-bottom:0;border-top:solid 1px #c5d1c8;font-size:1px;margin:0 auto;width:100%"></p>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
										<!-- footer -->
                                        <div style="display:table;table-layout:fixed;width:100%">
                                          <div style="display:table-cell;vertical-align:top;width:100%">
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td style="font-size:0px;word-break:break-word">
                                                              <div style="height:20px;line-height:20px">&hairsp;</div>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div> 
                                            <div style="font-size:0px;text-align:left;direction:ltr;vertical-align:top;width:100%">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%" width="100%">
                                                <tbody>
                                                  <tr>
                                                    <td style="vertical-align:top;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td align="left" style="font-size:0px;padding:0px;padding-top:9px;padding-right:40px;padding-bottom:9px;padding-left:40px;word-break:break-word">
																<div style="text-align:center;font-family:'Helvetica Neue',Arial;font-size:12px;
																font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.5;color:#727272">
																	
																	<p><strong>Address: </strong>562 Wellington Road, Street 32, San Francisco</p>

																	<p><strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789</p>

																	<p><strong>Hours: </strong>10:00 - 18:00, Mon - Sat</p>
																</div>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                           </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>