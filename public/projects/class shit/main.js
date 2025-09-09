class Student {
    constructor(name, classroom, city) {
        this.name = name;
        this.classroom = classroom;
        this.city = city;
    }

    render(parentEl) {
        let htmlEl = document.createElement("div");
        htmlEl.classList.add("student"); 

        let nameEl = document.createElement("div");
        nameEl.classList.add("name");
        nameEl.innerHTML = this.name;

        htmlEl.appendChild(nameEl);
        parentEl.appendChild(htmlEl);
    }
}


let root = document.getElementById("root");


let student1 = new Student("Brad Pitt", "SD1A", "New York");
student1.render(root);

let student2 = new Student("George Clooney", "SD1A", "New York");
student2.render(root);

let student3 = new Student("Jeff Thomson", "SD1A", "New York");
student3.render(root);
