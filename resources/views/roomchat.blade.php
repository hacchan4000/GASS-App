<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Messages</title>
  <link rel="stylesheet" href="style/roomchat.css" />
</head>
<body>

<header>
  <div class="header-left">Messages</div>
  <div class="header-right">
    <button id="addMessageBtn" class="new-msg-btn">+ New Messages</button>
    <span class="notification-icon" id="notifIcon">🔔 <span id="notifCount"></span></span>
    <div class="profile" id="profileBtn">
      <img src="gambar/raw.jpg" />
      <span>Marlon</span>
    </div>
    <div class="profile-detail" id="profileDetail">
      <p><strong>Name:</strong> Marlon</p>
      <p><strong>Email:</strong> marlon@example.com</p>
    </div>
    <div class="notification-box" id="notificationBox"></div>
  </div>
</header>

<div class="container">
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="search-container">
      <input id="searchInput" type="text" placeholder="Search..." oninput="filterUsers()" />
    </div>
    <div id="userList"></div>
    <div id="contactProfile" class="contact-profile-popup"></div>
  </div>

  <!-- Chat Area -->
  <div class="chat-area">
    <div class="chat-box">
      <div class="chat-header" id="chatHeader">
        <img id="chatUserImg" src="gambar/sil.jpg" />
        <div class="chat-user-info" onclick="toggleReceiverProfile()">
          <h3 id="chatUserName">Celtung</h3>
          <small>online</small>
        </div>
      </div>

      <div class="receiver-profile" id="receiverProfile"></div>
      <div class="messages" id="messages"></div>

      <div class="input-area">
        <input id="chatInput" type="text" placeholder="Write your messages ..." onkeypress="handleKey(event)" />
        <button onclick="sendMessage()">➤</button>
      </div>
    </div>
  </div>
</div>

<script>
const unreadMessages = {
  Jeslon: true,
  Anitung: true
};

const chatHistories = {
  Jeslon: [
    { sender: 'Jeslon', img: 'jes.jpg', text: "I'm on my way there sir, please wait" }
  ],
  Anitung: [
    { sender: 'Anitung', img: 'nit.jpg', text: "Excuse me, I want to rent a motorbike" }
  ],
  Celtung: [
    { sender: 'Celtung', img: 'sil.jpg', text: 'Hi! Is the Scoopy motorbike still available for rent tomorrow?' },
    { sender: 'you', img: 'raw.jpg', text: 'Hi Celtung! Still available. Want to rent daily or weekly?' },
    { sender: 'Celtung', img: 'sil.jpg', text: 'Daily only, when can I pick up the motorbike?' }
  ],
  Aditing: [
    { sender: 'Aditing', img: 'dit.jpg', text: "Good morning, I want to rent for monthly" }
  ],
  Marlon: [
    { sender: 'Marlon', img: 'raw.jpg', text: "I have already agreed to pick up this morning" }
  ]
};

const userList = [
  { name: 'Jeslon', img: 'jes.jpg', preview: 'I’m on my way there si...' },
  { name: 'Anitung', img: 'nit.jpg', preview: 'Excuse me, I want to rent...' },
  { name: 'Celtung', img: 'sil.jpg', preview: 'Daily only, when can I pic...' },
  { name: 'Aditing', img: 'dit.jpg', preview: 'Good morning, I want to...' },
  { name: 'Marlon', img: 'raw.jpg', preview: 'I have already agreed to...' }
];

function renderUserList(filtered = null) {
  const container = document.getElementById("userList");
  container.innerHTML = '';
  const users = filtered || userList;
  users.forEach(user => {
    const unreadDot = unreadMessages[user.name] ? "<div class='unread-dot'></div>" : "";
    const userDiv = document.createElement("div");
    userDiv.className = "user";
    userDiv.setAttribute("onclick", `loadChat('${user.name}')`);
    userDiv.innerHTML = `
      <div class='user-info'>
        <img src='gambar/${user.img}' onclick="event.stopPropagation();showContactProfile('${user.img}','${user.name}')" />
        <div class='user-text'>
          <span class='name'>${user.name}</span>
          <span class='preview'>${user.preview}</span>
        </div>
      </div>
      ${unreadDot}
    `;
    container.appendChild(userDiv);
  });
}

function filterUsers() {
  const keyword = document.getElementById("searchInput").value.toLowerCase();
  const filtered = userList.filter(user => user.name.toLowerCase().includes(keyword));
  renderUserList(filtered);
}

function moveToTop(name, force = false) {
  if (!force) return;
  const idx = userList.findIndex(u => u.name === name);
  if (idx > -1) {
    const user = userList.splice(idx, 1)[0];
    userList.unshift(user);
  }
}

function loadChat(user) {
  renderUserList();
  document.getElementById("chatUserName").innerText = user;
  document.getElementById("chatUserImg").src = `gambar/${userList.find(u => u.name === user).img}`;

  const messagesContainer = document.getElementById("messages");
  messagesContainer.innerHTML = "";

  const chatHistory = chatHistories[user] || [];
  chatHistory.forEach(msg => {
    const msgDiv = document.createElement("div");
    msgDiv.className = "message" + (msg.sender === "you" ? " you" : "");
    msgDiv.innerHTML = `
      <img src="gambar/${msg.img}" />
      <div class="bubble">${msg.text}</div>
    `;
    messagesContainer.appendChild(msgDiv);
  });

  if (unreadMessages[user]) {
    unreadMessages[user] = false;
    updateNotificationBox();
    renderUserList();
  }

  document.getElementById("receiverProfile").style.display = "none";
  document.getElementById("profileDetail").style.display = "none";
  document.getElementById("notificationBox").style.display = "none";
}

function sendMessage() {
  const input = document.getElementById("chatInput");
  const message = input.value.trim();
  if (!message) return;

  const user = document.getElementById("chatUserName").innerText;
  if (!chatHistories[user]) chatHistories[user] = [];
  chatHistories[user].push({ sender: "you", img: "raw.jpg", text: message });

  moveToTop(user, true);
  renderUserList();
  loadChat(user);
  input.value = "";
}

function updateNotificationBox() {
  const notifContent = Object.entries(unreadMessages)
    .filter(([_, unread]) => unread)
    .map(([name]) => `<p onclick="loadChat('${name}')"><strong>${name}</strong> sent a new message</p>`)
    .join('');
  document.getElementById("notificationBox").innerHTML = notifContent || "<p>No new messages</p>";
  document.getElementById("notifCount").textContent =
    Object.values(unreadMessages).filter(v => v).length || "";
}

function handleKey(e) {
  if (e.key === "Enter") sendMessage();
}

function toggleReceiverProfile() {
  const name = document.getElementById("chatUserName").innerText;
  const img = document.getElementById("chatUserImg").src;
  const container = document.getElementById("receiverProfile");
  container.innerHTML = `
    <img src="${img}" style="width:50px;height:50px;border-radius:50%" />
    <p>${name}</p>
  `;
  container.style.display = container.style.display === "block" ? "none" : "block";
}

function showContactProfile(img, name) {
  const box = document.getElementById("contactProfile");
  box.innerHTML = `<img src='gambar/${img}' width='60' style='border-radius:50%' /><p>${name}</p>`;
  box.style.display = 'block';
  setTimeout(() => box.style.display = 'none', 3000);
}

document.getElementById("addMessageBtn").addEventListener("click", function () {
  document.getElementById("searchInput").focus();
});

document.getElementById("notifIcon").addEventListener("click", () => {
  const notifBox = document.getElementById("notificationBox");
  notifBox.style.display = notifBox.style.display === "none" ? "block" : "none";
});

document.addEventListener("click", function (e) {
  const notifBox = document.getElementById("notificationBox");
  const notifIcon = document.getElementById("notifIcon");
  if (!notifBox.contains(e.target) && !notifIcon.contains(e.target)) {
    notifBox.style.display = "none";
  }
});

document.getElementById("profileBtn").addEventListener("click", () => {
  const profileDetail = document.getElementById("profileDetail");
  profileDetail.style.display = profileDetail.style.display === "none" ? "block" : "none";
});

renderUserList();
updateNotificationBox();
loadChat("Celtung");
</script>

</body>
</html>
