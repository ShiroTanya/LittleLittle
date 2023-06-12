<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta name ="viewport" content="width-device-width, initial-scale=1.0">
	<title> Xác nhận đơn hàng </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="background: #222;border-radius: 12px;padding: 15px;">
		<div class="col-md-12">

			<p style="text-align: center;color: #fff"> Đây là email tự động. Quý khách vui lòng không trả lời email này.</p>

			<div class="row" style="background: cadetblue;padding: 15px">
				<div class="col-md-6" style="text-align: center;color: #fff;font-weight: bold;font-size: 30px">
					<h4 style="margin: 0"> CÔNG TY TNHH CÔNG NGHỆ TECHGEAR </h4>
					<h6 style="margin: 0"> DỊCH VỤ BÁN HÀNG - CUNG ỨNG - NHẬP KHẨU - VẬN CHUYỂN CHUYÊN NGHIỆP </h6>
				</div>

					<div class="col-md-6 logo" style="color: #fff">
						<p>Chào bạn <strong style="color: #000;text-decoration: underline;">{{$mail_array['order_customer_name']}}</strong></p>
					</div>

					<div class="col-md-12">
						<p style="color: #fff;font-size: 17px"> Bạn hoặc một ai đó đã sử dụng mail này để đăng ký dịch vụ tại website với thông tin như sau:</p>
						<h4 style="color: #000;text-transform: uppercase;"> Thông tin đơn hàng </h4>
						<p> Mã đơn hàng: <strong style="text-transform: uppercase;color: #fff">{{$mail_array['payment_code']}}</strong></p>
						<p> Dịch vụ: <strong style="text-transform: uppercase;color: #fff">Đặt hàng trực tuyến</strong></p>

						<h4 style="color: #000;text-transform: uppercase;"> Thông tin người nhận </h4>
						<p> Email:
							@if($mail_array['order_customer_email']=='')
								<span style="color: #fff"> không có </span>
							@else
								<span style="color: #fff">{{$mail_array['order_customer_email']}}</span>
							@endif
						</p>

						<p> Họ và tên người nhận:
							@if($mail_array['order_customer_name']=='')
								<span style="color: #fff"> không có </span>
							@else
								<span style="color: #fff">{{$mail_array['order_customer_name']}}</span>
							@endif
						</p>

						<p> Số điện thoại:
							@if($mail_array['order_customer_phone']=='')
								<span style="color: #fff"> không có </span>
							@else
								<span style="color: #fff">{{$mail_array['order_customer_phone']}}</span>
							@endif
						</p>

						<p style="color: #fff"> >>>>Nếu thông tin người nhận hàng không có chúng tôi sẽ liên hệ với người đặt để trao đổi về đơn hàng mà bạn đã đặt mua<<<< 	</p>
					

								<tr>
									<td colspan="4" align="right">Tổng thanh toán: {{number_format($totalAmount,0,',','.')}}VND</td>
								</tr>
							</tbody>
						</table>
					</div>
				
		</div>
	</div>
</div>
</body>
</html>