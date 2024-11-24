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
