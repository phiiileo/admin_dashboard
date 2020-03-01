let courses_container = document.getElementById("courses-container")

const Courses = [{
        id: 1,
        title: "Intro To HTML 5",
        aurthor: "Phileo Jae",
        likes: 4,
        subscribers: 10
    }, {
        id: 2,
        title: "Intro To CSS",
        aurthor: "Phileo Jae",
        likes: 89,
        subscribers: 100
    }, {
        id: 3,
        title: "Intro To JS",
        aurthor: "Phileo Jae",
        likes: 50,
        subscribers: 120
    }, {
        id: 4,
        title: "Intro To Bootstrap",
        aurthor: "Phileo Jae",
        likes: 40,
        subscribers: 69
    },
    {
        id: 5,
        title: "Intro To Bootstrap",
        aurthor: "Phileo Jae",
        likes: 89,
        subscribers: 150
    }
]

Courses.map((value, index) => {
    courses_container.innerHTML += getCourse(value, index + 1)
})


function getCourse(course, num) {
    console.log(course)

    return (
        `<article class="course">
        <badge>${num}</badge>
        <img src="./images/image.png" alt="course image">
        <p class="course_title">${course.title}</p>
        <p>By: <a >${course.aurthor}</a></p>
        <a class="likes">likes: ${course.likes}</a>
        <a class="subscribers">Sub: ${course.subscribers}</a>
        </article>`
    )
}