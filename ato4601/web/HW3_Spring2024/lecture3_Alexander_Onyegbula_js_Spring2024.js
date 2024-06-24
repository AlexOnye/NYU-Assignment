 function ManipulateElementsExternal() {
            let man_name = document.getElementById("ext_name").value;
            document.getElementById("ext_message").innerHTML = "Hello " + man_name + ". Welcome to my webpage, I embedded you into the HTML";
        }

        function ManipulateElementsExternal_Debug() {
            let man_name = document.getElementById("debug_name").value;
            console.log("The input name provided was: " + man_name);
            document.getElementById("debug_message").innerHTML = "Hello " + man_name + ". Welcome to my webpage, I embedded you into the HTML - Debug Mode";
        }

        function ValueSwap() {
            let val1 = document.getElementById("Val1");
            let val2 = document.getElementById("Val2");

            if (val1 && val2) {
                [val1.value, val2.value] = [val2.value, val1.value];
                document.getElementById("swap_message").innerHTML = "Values Swapped";
            } else {
                console.error("One or more elements not found.");
            }
}