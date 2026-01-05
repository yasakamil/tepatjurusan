<button id="pay-button"
    class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold">
    Bayar Sekarang
</button>

<script src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>

<script>
document.getElementById('pay-button').onclick = function () {
    snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
            window.location.href = "/payment/success";
        },
        onPending: function (result) {
            console.log(result);
        },
        onError: function () {
            alert("Pembayaran gagal");
        }
    });
};
</script>
