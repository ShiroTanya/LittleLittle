<!DOCTYPE html>
<html>
<head>
    <title>Vé của bạn</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">VÉ CỦA BẠN</h1>
    <table>
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Số thẻ</th>
                <th>Họ tên</th>
                <th>Ngày hết hạn</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $show_payment_QR->payment_code }}</td>
                <td>{{ $show_payment_QR->payment_account_number }}</td>
                <td>{{ $show_payment_QR->payment_account_name }}</td>
                <td>{{ $show_payment_QR->payment_expired_date }}</td>
                <td>{{number_format($totalAmount, 0, `,` , `.`)}} VNĐ</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
