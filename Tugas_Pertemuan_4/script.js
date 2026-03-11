function hitung() {
      let nmatakuliah = parseInt(document.getElementById("nmatakuliah").value);

      if (nmatakuliah >= 0 && nmatakuliah <= 49) {
        document.getElementById("hasil").innerText = "E";
      } else if (nmatakuliah >= 50 && nmatakuliah <= 59) {
        document.getElementById("hasil").innerText = "D";
      } else if (nmatakuliah >= 60 && nmatakuliah <= 69) {
        document.getElementById("hasil").innerText = "C";
      } else if (nmatakuliah >= 70 && nmatakuliah <= 79) {
        document.getElementById("hasil").innerText = "B";
      } else if (nmatakuliah >= 80 && nmatakuliah <= 100) {
        document.getElementById("hasil").innerText = "A";
      } else {
        document.getElementById("hasil").innerText = "Error";
      }
    }