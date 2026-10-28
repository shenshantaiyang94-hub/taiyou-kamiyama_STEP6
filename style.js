document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    if (form) {
        form.addEventListener('submit', function (e) {
            const name = document.getElementById('name').value;
            const companyName = document.getElementById('companyName').value;
            const email = document.getElementById('email').value;
            const age = document.getElementById('age').value;
            const message = document.getElementById('message').value;

            if (name === "" || companyName === "" || email === "" || age === "" || message === "") {
                alert('必須項目が未入力です。入力内容をご確認ください。');
                e.preventDefault();
                return;
            }

            const msg = "以下の内容を本当に送信しますか？\n\nお名前：" + name + "\n会社名：" + companyName + "\nメールアドレス：" + email + "\n年齢：" + age + "\nお問い合わせ内容：" + message;
            if (!confirm(msg)) {
                e.preventDefault();
            }
        });
    }
});

const colors = ['blue', 'red', 'yellow', 'gray'];
let currentIndex = 0;

function changeFooterBg() {
    const footer = document.querySelector('footer');
    footer.style.backgroundColor = colors[currentIndex];
    currentIndex = (currentIndex + 1) % colors.length;
}
