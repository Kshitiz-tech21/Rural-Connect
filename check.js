function checkLand() {
    const area = parseFloat(document.getElementById("area").value);
    const soilType = document.getElementById("soilType").value;
    const rainfall = parseFloat(document.getElementById("rainfall").value);
    const temperature = parseFloat(document.getElementById("temperature").value);
  
    // Logic to check whether land is good for farming based on details
    let result = "";
    if (area >= 10 && soilType.toLowerCase() === "wet" && rainfall >= 500 && temperature >= 20 && temperature <= 35) {
      result = "Good land for farming!";
    } else {
      result = "Not suitable for farming.";
    }
  
    document.getElementById("landResult").innerText = result;
  }