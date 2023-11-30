<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/lapangan.css">
    <title>List Lapangan Olahraga</title>
</head>

<body>
    <header>
        <h1>Lapangan Olahraga</h1>
    </header>
    <div class="container">
        <ul class="field-list" id="field-list">
            <!-- Daftar lapangan akan di-generate melalui JavaScript -->
        </ul>
    </div>

    <script>
        // Daftar lapangan dalam bentuk array
        const lapanganData = [
            { imgSrc: "futsal.jpg", name: "Lapangan Sepak Bola 1", address: "Jalan Sepak Bola 1" },
            { imgSrc: "futsal.jpg", name: "Lapangan Basket A", address: "Jalan Basket A" },
            { imgSrc: "futsal.jpg", name: "Lapangan Tenis XYZ", address: "Jalan Tenis XYZ" },
            { imgSrc: "futsal.jpg", name: "Lapangan Voli Plus", address: "Jalan Voli Plus" },
            { imgSrc: "futsal.jpg", name: "Lapangan Badminton Gemilang", address: "Jalan Badminton Gemilang" },
            { imgSrc: "futsal.jpg", name: "Lapangan Futsal Indah", address: "Jalan Futsal Indah" },
            { imgSrc: "futsal.jpg", name: "Lapangan Golf Terbaik", address: "Jalan Golf Terbaik" },
            { imgSrc: "futsal.jpg", name: "Lapangan Renang Sea View", address: "Jalan Renang Sea View" },
            { imgSrc: "futsal.jpg", name: "Lapangan Kriket Mewah", address: "Jalan Kriket Mewah" },
            { imgSrc: "futsal.jpg", name: "Lapangan Baseball Aman", address: "Jalan Baseball Aman" },
            { imgSrc: "futsal.jpg", name: "Lapangan Softball Hebat", address: "Jalan Softball Hebat" },
            { imgSrc: "futsal.jpg", name: "Lapangan Skateboard Seru", address: "Jalan Skateboard Seru" },
            { imgSrc: "futsal.jpg", name: "Lapangan Panahan Prima", address: "Jalan Panahan Prima" },
            { imgSrc: "futsal.jpg", name: "Lapangan Bulu Tangkis Bagus", address: "Jalan Bulu Tangkis Bagus" },
            { imgSrc: "futsal.jpg", name: "Lapangan Anggar Terbaik", address: "Jalan Anggar Terbaik" }
        ];


        // Mendapatkan elemen ul dengan id "field-list"
        const fieldList = document.getElementById("field-list");

        // Loop melalui data lapangan dan menambahkannya ke dalam elemen ul
        lapanganData.forEach((lapangan, index) => {
            const listItem = document.createElement("li");
            listItem.className = "field-item";
            listItem.innerHTML = `
                <img src="${lapangan.imgSrc}" alt="Lapangan ${index + 1}">
                <div class="field-details">
                    <h2>${lapangan.name}</h2>
                    <p>${lapangan.address}</p>
                </div>
            `;
            fieldList.appendChild(listItem);
        });
    </script>
</body>

</html>