<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up | Hackathon Hub</title>
<style>
    /* Background Gradient + Animated */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        background: linear-gradient(135deg, #ff6a00, #ee0979, #00c6ff, #0072ff);
        background-size: 400% 400%;
        animation: gradientBG 12s ease infinite;
    }

    @keyframes gradientBG {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }

    header {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px 0;
        text-align: center;
        font-size: 1.8em;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .container {
        max-width: 550px;
        margin: 50px auto;
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        backdrop-filter: blur(6px);
        transition: transform 0.3s ease;
    }

    .container:hover {
        transform: translateY(-5px);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
        font-size: 1.8em;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 15px;
        color: #444;
    }

    input, select, textarea {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    input:focus, select:focus, textarea:focus {
        border-color: #0073e6;
        box-shadow: 0 0 8px rgba(0,115,230,0.5);
        outline: none;
    }

    .btn {
        display: block;
        background: linear-gradient(45deg, #0073e6, #00c6ff);
        color: white;
        padding: 12px;
        text-align: center;
        border: none;
        border-radius: 8px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 1.1em;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background: linear-gradient(45deg, #005bb5, #008cff);
        transform: scale(1.05);
    }

    .member-row {
        display: flex;
        gap: 8px;
        margin-top: 8px;
    }

    .remove-btn {
        background-color: crimson;
        color: white;
        border: none;
        padding: 0 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s ease;
    }

    .remove-btn:hover {
        background-color: darkred;
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    .modal-content {
        background: white;
        padding: 25px;
        border-radius: 12px;
        width: 450px;
        margin: 10% auto;
        position: relative;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        animation: slideDown 0.5s ease;
    }

    @keyframes slideDown {
        from {transform: translateY(-50px); opacity: 0;}
        to {transform: translateY(0); opacity: 1;}
    }

    .close {
        position: absolute;
        right: 15px;
        top: 10px;
        cursor: pointer;
        font-size: 22px;
        color: #333;
        font-weight: bold;
    }
</style>
</head>
<body>
<header>
    🚀 Hackathon Hub – Team Sign Up
</header>
<div class="container">
    <h2>Register Your Team</h2>
    <form id="teamForm">
        <label>Team Name</label>
        <input type="text" placeholder="Enter team name" required>
        <label>Team Members (Max 5)</label>
        <div id="membersContainer">
            <div class="member-row">
                <input type="text" name="member[]" placeholder="Member Name" required>
            </div>
        </div>
        <button type="button" class="btn" id="addMemberBtn">+ Add Member</button>
        <button type="button" class="btn" id="openModalBtn">Create Team</button>
    </form>
</div>
<!-- Modal -->
<div class="modal" id="teamDetailsModal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h3>Additional Team Details</h3>
        <form id="extraDetailsForm">
            <label>Hackathon Period</label>
            <select name="period" required>
                <option value="">Select</option>
                <option value="1 Day">1 Day</option>
                <option value="3 Days">3 Days</option>
                <option value="1 Week">1 Week</option>
            </select>
            <label>Category</label>
            <select name="category">
                <option value="">Select</option>
                <option value="AI/ML">AI/ML</option>
                <option value="Web Development">Web Development</option>
                <option value="App Development">App Development</option>
                <option value="Innovators Challenge">Innovators Challenge</option>
                <option value="AI Revolution">AI Revolution</option>
                <option value="Cybersecurity Warfare">Cybersecurity Warfare</option>
            </select>
            <label>Description</label>
            <textarea name="desc" placeholder="Short description"></textarea>
            <button type="submit" class="btn">✅ Submit & Sign Up</button>
        </form>
    </div>
</div>
<script>
    const maxMembers = 5;
    const membersContainer = document.getElementById("membersContainer");
    const addMemberBtn = document.getElementById("addMemberBtn");
    const openModalBtn = document.getElementById("openModalBtn");
    const modal = document.getElementById("teamDetailsModal");
    const closeModal = document.getElementById("closeModal");

    // Add Member
    addMemberBtn.addEventListener("click", () => {
        const memberCount = membersContainer.querySelectorAll(".member-row").length;
        if (memberCount < maxMembers) {
            const div = document.createElement("div");
            div.classList.add("member-row");
            div.innerHTML = `
                <input type="text" name="member[]" placeholder="Member Name" required>
                <button type="button" class="remove-btn">X</button>
            `;
            membersContainer.appendChild(div);
        } else {
            alert("⚠️ You can only have 5 members in a team!");
        }
    });

    membersContainer.addEventListener("click", (e) => {
        if (e.target.classList.contains("remove-btn")) {
            e.target.parentElement.remove();
        }
    });

    // Open Modal
    openModalBtn.addEventListener("click", () => {
        modal.style.display = "block";
    });

    // Close Modal
    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Final Submit
    document.getElementById("extraDetailsForm").addEventListener("submit", (e) => {
        e.preventDefault();
        modal.style.display = "none";
        alert("✅ Team registered successfully! Confirmation email sent.");
    });
</script>

</body>
</html>
