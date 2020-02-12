let table = document.getElementById("table");

let students = [
    {
        id: 1,
        name: "Brad surge",
        email: "bradffhdgfgfgfhfhfhsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 2,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 3,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 1,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 2,
        name: "Brad surge",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    },
    {
        id: 3,
        name: "Bradfgfgfgfg surge scjffhsdkjbfbh",
        email: "bradsurge@gmail.com",
        phoneNumber: "08012345678",
    }
]

students.map((value, index) => {
    let row = `<tr>
                    <td>${index + 1}.</td>
                    <td>${value.name}</td>
                    <td>${value.email}</td>
                    <td>${value.phoneNumber}</td>
                    <td>
                    <button class="view-profile">View</button>
                    <button class="remove-profile">Remove</button>
                    </td>
                </tr>`;
    table.innerHTML += row
})

let view_profile = document.getElementsByClassName("view-profile");

for(let i=0; i<view_profile.length; i++){
    view_profile[i].addEventListener("click", () => {
       window.location.href = "profile.html"
    })
}