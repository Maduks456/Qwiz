 $q= 1
        function optionClicked() {
            let userPicked = document.getElementById("list").value;

            if (userPicked === "one") {
                window.location.href = "https://theme1";
            } 
            else if (userPicked === "two") {
                window.location.href = "https://theme2";
            } 
            else if (userPicked === "three") {
                window.location.href = "https://theme3";
            } 
            else if (userPicked === "four") {
                window.location.href = "https://theme4";
            } 
            else if (userPicked === "five") {
                window.location.href = "https://theme5";
            } 
            else {
                alert("Izvēlies kaut ko vispirms");
            }
        }
        document.addEventListener("DOMContentLoaded", function () {

            const feildContainer = document.getElementById('questions-container');
            const addQuestion = document.getElementById('addQuestion');
            let index = 1;
            addQuestion.addEventListener("click", ()=>{
                const Questions = document.createElement("div");
                Questions.classList.add("question-box");

                const newQuestion = document.createElement("input");
                newQuestion.type="text";
                newQuestion.name=`questions[${index}][question]`;
                newQuestion.classList="answ";
                newQuestion.placeholder="Question";

                const answers = [];

                for (let i = 0; i < 4; i++) {
                    const wrapper = document.createElement("div");

                    const radio = document.createElement("input");
                    radio.type = "radio";
                    radio.name = `questions[${index}][correct]`;
                    radio.value = i;

                    const answer = document.createElement("input");
                    answer.type = "text";
                    answer.classList="answ";
                    answer.name = `questions[${index}][answers][]`;
                    answer.placeholder = `Answer ${i + 1}`;

                    wrapper.appendChild(radio);
                    wrapper.appendChild(answer);

                    answers.push(wrapper); 
                }


                Questions.appendChild(newQuestion);
                answers.forEach(a => Questions.appendChild(a));
                
                feildContainer.appendChild(Questions);

                index++;
            });
        });