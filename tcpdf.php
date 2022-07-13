<?php

$path = 'tcpdf_header.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$header = 'data:image/' . $type . ';base64,' . base64_encode($data);

$path = 'tcpdf_footer.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$footer = 'data:image/' . $type . ';base64,' . base64_encode($data);

$html='<style>@page { margin: 0px; }</style>';

$html.='
<table style="font-family:\'Helvetica\'; margin: 25px 25px 0px 40px;">
    <tr>
      <td>
        <table style="width: 740px; margin: 0px 40px 0px 0px;">
          <tr>
            <td><img src="'.$header.'" alt="logo" style="height: 90px; width: 265px;"></td>
            <td style="padding: 0px 30px;"></td>
            <td style="text-align: left;">
              <p style=" font-size: 21px; margin-bottom: 3px; letter-spacing: 1px; font-weight:bold;">INVOICE</p>
              <p style="font-size: 14px; font-weight: 530;">INVOICE NO :</p>
              <p style="margin: 0px 0px 5px 0px; font-size: 12px; font-weight: 400;">VDO - Jul-2021 -00015</p>
              <p style="margin: 0px;"><b style=" font-size: 14px; font-weight: 530;">INVOICE DATE</b>: Jul-21, 2021</p>
            </td>
          </tr>
          <tr>
            <td>
              <p style="font-size: 14px; font-weight: bold;">INVOICE TO:</p>
              <p style="margin: 3px 0px; font-size: 17px; font-weight: bold;">MA LAXMI ENAMELS PVT LTD</p>
              <p style="margin: 0px; font-size: 10px; font-weight: 550;">SHOP NO. 122 & 123, CITY CENTRE - II</p>
              <p style="margin: 0px; font-size: 10px; font-weight: 550;">RAJARHAT, NEWTOWN, WEST BENGAL, INDIA, 700 135</p>
              <p style="margin: 5px 0px; font-size: 10px; font-weight: 550;">GST : 19AAACM7808D1ZJ | PAN : AAACM7808D</p>
            </td>
          </tr> 
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table style="border-bottom: 2px solid lightgray; margin: 0px 40px 10px 0px; border-collapse: collapse; font-weight: bold;" cellpadding="6">
          <tr style="text-align: center; color: white; font-size: 14px;">
            <td colspan="2" style="border-radius: 50px 0px 0px 50px; background-color: #FFA624; border-right: 1px solid lightgray;">BUYER NAME
            </td>
            <td style="background-color: #FFA624; width:170px;">PHONE</td>
            <td style="background-color: #FFA624;
             border-left: 1px solid lightgray;">EMAIL</td>
          </tr>
          <tr style="text-align: center; font-size: 13px;">
            <td colspan="2">Mohit Agarwal</td>
            <td style="border: 1px solid lightgray;">70440 83998</td>
            <td style="font-size: 11px; padding: 0px 25px;">mohit.agarwal@divyakitchenwares.com</td>
          </tr>
          <tr style="font-size: 13px;">
            <td style="padding: 0px 10px; border: 1px solid lightgray; background-color: #F2F2F2; width:110px; height:30px; min-height:30px;">PO No  <span style="float: right;">:</span></td>
            <td style="padding: 0px 10px; border: 1px solid lightgray;"></td>
            <td style="padding: 0px 10px; border: 1px solid lightgray; background-color: #F2F2F2;">PO Date  <span style="float: right;padding: 0px 25px;">:</span></td>
            <td style="padding: 0px 10px; border: 1px solid lightgray; border-radius: 0px 50px 50px 0px;">Jun-22,2021</td>
          </tr>
          <tr style="font-size: 13px; height: 30px;">
            <td style="padding: 0px 10px; border: 1px solid lightgray; height:30px; min-height:30px;">VDOfy Order No  <span style="float: right;">:</span></td>
            <td style="padding: 0px 10px; border: 1px solid lightgray; width: 105px;">QR000 145</td>
            <td style="padding: 0px 10px; border: 1px solid lightgray;">VDOfy Order Date  <span style="float: right;">:</span></td>
            <td style="padding: 0px 10px; border: 1px solid lightgray; border-right: 0;">Jun-22,2021</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table style="width: 740px; margin: 0px 40px 0px 0px;  border-collapse: collapse; font-size: 13px; text-align: center;" cellpadding="6">
          <tr style="text-align: center; color: white; font-size: 14px; height: 30px; font-weight: bold">
            <td style="border-radius: 50px 0px 0px 50px; background-color: #FFA624; border-right: 1px solid lightgray; width: 65px;">SL.No</td>
            <td style="background-color: #FFA624; border-right: 1px solid lightgray; width: 240px;">Description of Goods/ Services</td>
            <td style="background-color: #FFA624; border-right: 1px solid lightgray; width: 90px;">HSN/SAC</td>
            <td style="background-color: #FFA624; border-right: 1px solid lightgray; width: 50px;">Qty</td>
            <td style="background-color: #FFA624; border-right: 1px solid lightgray;">Rate</td>
            <td style="border-radius: 0px 50px 50px 0px; background-color: #FFA624; border-left: 1px solid lightgray;">Amount</td>
          </tr>
          <tr style="font-weight: bold; height: 40px;">
            <td style="border-right: 1px solid lightgray; border-bottom: 1px solid lightgray;">01
            </td>
            <td style="border-right: 1px solid lightgray; border-bottom: 1px solid lightgray; text-align: left; padding: 0px 15px;">Custom Made Video
            </td>
            <td style="border-bottom: 1px solid lightgray;">998433
            </td>
            <td style="border-right: 1px solid lightgray; border-bottom: 1px solid lightgray;">01
            </td>
            <td style="border-right: 1px solid lightgray; border-bottom: 1px solid lightgray;">18000
            </td>
            <td style="border-bottom: 1px solid lightgray;">INR 18,000 .00
            </td>
          </tr>
          <tr style=" height: 50px;">
            <td style="border-bottom:1px solid lightgray;"></td>
            <td style=" text-align: left; padding: 0px 15px;">Category 1 (1 food shots)<br>Divya Electric Kettle</td>
            <td></td><td></td><td></td><td></td>
          </tr>
          <tr style="font-weight: bold; height: 40px;">
            <td style="border-right: 1px solid lightgray; border-bottom:1px solid lightgray;">02</td>
            <td style="border: 1px solid lightgray; text-align: left; padding: 0px 15px;">Custom Made Video</td>
            <td style="border: 1px solid lightgray;">998433</td>
            <td style="border: 1px solid lightgray;">02</td>
            <td style="border: 1px solid lightgray;">20000</td>
            <td style="border: 1px solid lightgray; border-right:0px;">INR 40,000 .00</td>
          </tr>
          <tr style=" height: 70px;">
            <td></td>
            <td style=" text-align: left; padding: 0px 15px;">Category 2 (2 food shots)<br>Divya Induction Cooktop <br>Divya SS Rice Cooker</td>
            <td></td><td></td><td></td><td></td>
          </tr>
          <tr style="font-weight: bold; height: 40px;">
            <td style="border: 1px solid lightgray; border-left:0px;">03</td>
            <td style="border: 1px solid lightgray; text-align: left; padding: 0px 15px;">Custom Made Video</td>
            <td style="border: 1px solid lightgray;">998433</td>
            <td style="border: 1px solid lightgray;">01</td>
            <td style="border: 1px solid lightgray;">27000</td>
            <td style="border:1px solid lightgray; border-right:0px;">INR 27,000 .00</td>
          </tr>
          <tr style=" height: 60px;">
            <td></td>
            <td style=" text-align: left; padding: 0px 15px;">Category 3 (3-4 food shots)<br>Multi-function heating cup</td>
            <td></td><td></td><td></td><td></td>
          </tr>
          <tr style="height: 30px;">
            <td style="background-color: #EEEEEE;"></td>
            <td style="background-color: #EEEEEE; padding: 0px 15px; text-align: left; font-weight: bold;height:40px;min-height:30px;">GROSS TOTAL</td>
            <td colspan="2" style=" background-color: #EEEEEE;"></td>
            <td colspan="2" style=" background-color: #EEEEEE; border-radius: 0px 50px 50px 0px; font-weight: bold;text-align: right; padding: 0px 25px;">INR 85,000.00</td>
          </tr>
          <tr>
            <td></td>
            <td style=" padding: 0px 15px; text-align: left; height:30px;min-height:30px;">IGST 18 %</td>
            <td colspan="2"></td>
            <td colspan="2" style="text-align: right; padding: 0px 25px;">INR 15,300.00</td>
          </tr>
          <tr style="height: 30px;">
            <td style="border-radius: 50px 0px 0px 50px; background-color: #FFA624; color: white;"></td>
            <td style="background-color: #FFA624; color: white; padding: 0px 15px; text-align: left; font-weight: bold; height:30px;min-height:30px;">GRAND TOTAL</td>
            <td colspan="2" style=" background-color: #FFA624; color: white;"></td>
            <td colspan="2" style=" background-color: #FFA624; color: white; border-radius: 0px 50px 50px 0px; font-weight: bold;text-align: right; padding: 0px 25px;">INR 1,00,300.00</td>
          </tr>
          <tr style="font-size: 12px;">
            <td colspan="6" style="font-weight: bold; text-align: left; padding: 10px 30px 5px 30px;">Amount Payable in Words : One Lakh Three Hundred Rupees Only
            </td>
          </tr>
          <tr style="font-size: 12px;">
            <td colspan="6" style="text-align: left; padding: 0px 30px;">FOR PAYMENTS MADE VIA CHEQUE OR BANK TRANSFER IN FAVOR OF :
            </td>
          </tr>
          <tr style="font-size: 12px;">
            <td colspan="4" style=" font-weight: bold; text-align: left; padding: 0px 30px;">3RD | VISUALS PRIVATE LIMITED
            </td>
            <td colspan="2" style="font-weight: bold; text-align: right; padding: 0px 18px;">For 3RD | Visuals Pvt. Ltd.
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <table style="width: 260px; font-size: 12px; border-collapse: collapse; margin-left: 28px; text-align: left;">
                <tr>
                  <td>HDFC ACCOUNT <span style="float: right;">:</span></td>
                  <td>50200048226920</td>
                </tr>
                <tr>
                  <td>IFSC  <span style="float: right;">:</span></td>
                  <td>HDFC0003804</td>
                </tr>
                <tr>
                  <td>BRANCH  <span style="float: right;">:</span></td>
                  <td>WHITEFIELD, BANGALORE</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3" style="font-weight: 300; font-size: 12px; text-align: right; padding: 20px 8px; text-decoration: overline;">Authorised Signatory</td>
          </tr>
          <tr style="height: 10px;"></tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table>
          <tr>
            <td><img src="'.$footer.'" style="width: 700px;" </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>';

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream(
  'file.pdf',
  array(
    'Attachment' => 0
  )
);






?>
