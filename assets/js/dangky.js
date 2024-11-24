     function validateForm() {
        var tendn = document.forms["registrationForm"]["tendn"].value;
        var matkhau = document.forms["registrationForm"]["mk"].value;
        var xacnhanmk = document.forms["registrationForm"]["nlmk"].value;
        var sdt = document.forms["registrationForm"]["sdt"].value;

        var rbmk = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        var rbsdt = /^(03|05|07|08|09)[0-9]{8}$/;

        if (tendn.length < 8) {
            alert("Tên đăng nhập phải có ít nhất 8 ký tự.");
            return false;
        }

        if (!matkhau.match(rbmk)) {
            alert("Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất 1 chữ in hoa, 1 chữ số và 1 ký tự đặc biệt.");
            return false;
        }

        if (matkhau !== xacnhanmk) {
            alert("Xác nhận mật khẩu không trùng khớp.");
            return false;
        }

        if (!sdt.match(rbsdt)) {
            alert("Số điện thoại không hợp lệ.");
            return false;
        }
        return true;
    }

    function validateForm() {
        var username = document.forms["employeeForm"]["username"].value;
        var password = document.forms["employeeForm"]["password"].value;
        var sdt = document.forms["employeeForm"]["sdt"].value;

        var rbsdt2 = /^(03|05|07|08|09)[0-9]{8}$/;
        if (!sdt.match(rbsdt2)) {
            alert("Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại hợp lệ bắt đầu bằng đầu số của Việt Nam (03, 05, 07, 08, 09).");
            return false;
        }
        return true;
    }