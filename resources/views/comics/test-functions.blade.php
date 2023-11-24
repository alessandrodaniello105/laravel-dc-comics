<script>
let deleteMsg;

function testdeleteMsgTimeout() {
    setTimeout(() => {
        deleteMsg = document.getElementById('delete_msg');
        console.log('il timer NON funziona!')
        if(deleteMsg) {
            console.log('il timer funziona!')
            setTimeout(() => {
                deleteMsg.classList.add("hidden");
            }, 2000)
        }
    }, 1000);

}

// function testPrint() {
//     console.log('primo messaggio')

//     setTimeout(() => {
//         console.log('secondo messaggio')
//     }, 2000);

// }

testdeleteMsgTimeout();
</script>
