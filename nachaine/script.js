document.addEventListener("DOMContentLoaded", function() {
    const studentNameInput = document.getElementById("studentName");
    const markAttendanceButton = document.getElementById("markAttendance");
    const attendanceList = document.getElementById("attendanceData");

    markAttendanceButton.addEventListener("click", function() {
        const studentName = studentNameInput.value.trim();
        if (studentName !== "") {
            const listItem = document.createElement("li");
            listItem.textContent = studentName;
            attendanceList.appendChild(listItem);
            studentNameInput.value = "";
        } else {
            alert("Please enter a valid student name.");
        }
    });
});
