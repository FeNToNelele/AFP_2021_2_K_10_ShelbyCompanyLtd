$(document).ready(function() {
    // QR kód generálásáért felelős JAVASCRIPT
    $('.QRBtn').click(function() {
        let param = $(this).data();
        let eid = param['id'];
        console.log(eid);
        toggleAllButtons(eid);
        save(eid);
        toggleAllButtons(eid);
    });
    function save(eid) {
        new QRCode(document.getElementById("qrcode"+eid), "http://127.0.0.1:8000/verify/"+eid);
        var pdf_content = document.getElementById("pdf_body#"+eid);
        html2pdf(pdf_content);
        document.getElementById("qrcode"+eid).innerHTML = "";
    }
    function toggleAllButtons(eid) {
        var pCapacityState = document.getElementById('pCapacity');
        if(pCapacityState) {
            if (pCapacityState.classList.contains('inline')) {
                pCapacityState.classList.remove('inline');
                pCapacityState.classList.add('hidden');
            }
            else {
                pCapacityState.classList.remove('hidden');
                pCapacityState.classList.add('inline');
            }
        }
        var btnGenerateState = document.getElementById('btnGenerate#'+eid);
        if(btnGenerateState) {
            if (btnGenerateState.classList.contains('inline')) {
                btnGenerateState.classList.remove('inline');
                btnGenerateState.classList.add('hidden');
            }
            else {
                btnGenerateState.classList.remove('hidden');
                btnGenerateState.classList.add('inline');
            }
        }
        
        var btnApplication = document.getElementById('btnApplication');
        if(btnApplication) {
            if (btnApplication.classList.contains('inline')) {
                btnApplication.classList.remove('inline');
                btnApplication.classList.add('hidden');
            }
            else {
                btnApplication.classList.remove('hidden');
                btnApplication.classList.add('inline');
            }
        }

        var updateForm = document.getElementById('updateForm#'+eid);
        if(updateForm) {
            if (updateForm.classList.contains('inline')) {
                updateForm.classList.remove('inline');
                updateForm.classList.add('hidden');
            }
            else {
                updateForm.classList.remove('hidden');
                updateForm.classList.add('inline');
            }
        }
        var deleteForm = document.getElementById('deleteForm#'+eid);
        if(deleteForm) {
            if (deleteForm.classList.contains('inline')) {
                deleteForm.classList.remove('inline');
                deleteForm.classList.add('hidden');
            }
            else {
                deleteForm.classList.remove('hidden');
                deleteForm.classList.add('inline');
            }
        }
        var jelentkezBtn = document.getElementById('btnApplication#'+eid);
        console.log(jelentkezBtn);
        if(jelentkezBtn) {
            if (jelentkezBtn.classList.contains('inline')) {
                jelentkezBtn.classList.remove('inline');
                jelentkezBtn.classList.add('hidden');
            }
            else {
                jelentkezBtn.classList.remove('hidden');
                jelentkezBtn.classList.add('inline');
            }
        }
        var leadBtn = document.getElementById('btnAbandon#'+eid);
        console.log(leadBtn);
        if(leadBtn) {
            if (leadBtn.classList.contains('inline')) {
                leadBtn.classList.remove('inline');
                leadBtn.classList.add('hidden');
            }
            else {
                leadBtn.classList.remove('hidden');
                leadBtn.classList.add('inline');
            }
        }
    }
});
