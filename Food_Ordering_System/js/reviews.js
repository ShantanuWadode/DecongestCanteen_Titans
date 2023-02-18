const form = document.querySelector('#form')
const container = document.getElementsByClassName('reviews')[0]
// console.log(form)

form.addEventListener('submit', function (e) {
    e.preventDefault();
    const username = form.getElementsByClassName('in-name')[0]
    const review = form.getElementsByClassName('in-review')[0]

    console.log(username, review)

    const words = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December"]

    const d = new Date()
    let date = d.getDate()
    let month = words[d.getMonth()]

    const newRev = document.createElement('div')
    newRev.classList.add('box')
    const newRevContent =
        `
        <div class="account">
            <img src="avatar.png" alt="" class="avatar">
            <div class="info">
                <h2 class="name">${username.value}</h2>
                <p>2 reviews</p>
            </div>
        </div>
        <div class="stars">
            <img src="star.png" alt="" class="star">
            <img src="star.png" alt="" class="star">
            <img src="star.png" alt="" class="star">
            <img src="star.png" alt="" class="star">
            <img src="star.png" alt="" class="star">
        </div>
        <div class="review"><p>
            ${review.value}
            </p>
        </div>
        <div class="order">
            <p>
                <b>Dated :</b> ${month} ${date} 
            </p>
        </div>
    `

    newRev.innerHTML = newRevContent
    container.append(newRev)
    username.value = ''
    review.value = ''

})

