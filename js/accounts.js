document.addEventListener('DOMContentLoaded', () => {

    function randomNumber(max) {
        return Math.floor(Math.random() * (max + 1));
    };

    function randomColor() {
        let max = 300,
            num1, num2, num3;

        do {
            num1 = randomNumber(max);
        } while (num1 > 255);
        max -= num1;

        do {
            num2 = randomNumber(max);
        } while (num2 > 255);

        num3 = max - num2;
        if (num3 > 255) {
            num3 = 255;
        };
        return `rgb(${num1},${num2},${num3})`;
    };

    document.querySelectorAll('.board-header').forEach((element) => {
        element.style.backgroundColor = randomColor();
    });
});
