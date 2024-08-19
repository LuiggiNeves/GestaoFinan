function degreesToRadians(degrees) {
    return degrees * Math.PI / 180;
}

function calculateDistance(lat1, lon1, lat2, lon2) {
    const earthRadiusKm = 6371;
    const routeFactor = 1.3; // Fator para aproximar a distância real de estrada

    const dLat = degreesToRadians(lat2 - lat1);
    const dLon = degreesToRadians(lon2 - lon1);

    const lat1Rad = degreesToRadians(lat1);
    const lat2Rad = degreesToRadians(lat2);

    const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
              Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1Rad) * Math.cos(lat2Rad); 
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a)); 

    return earthRadiusKm * c * routeFactor;
}


async function getCoordinates(address) {
    const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`);
    const data = await response.json();
    if (data.length === 0) {
        throw new Error('Endereço não encontrado');
    }
    return {
        lat: parseFloat(data[0].lat),
        lon: parseFloat(data[0].lon)
    };
}

document.getElementById('distanceForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    const address1 = document.getElementById('address1').value;
    const address2 = document.getElementById('address2').value;
    const resultElement = document.getElementById('result');

    try {
        const coords1 = await getCoordinates(address1);
        const coords2 = await getCoordinates(address2);

        const distance = calculateDistance(coords1.lat, coords1.lon, coords2.lat, coords2.lon);
        resultElement.textContent = `Distância: ${distance.toFixed(2)} km`;
    } catch (error) {
        resultElement.textContent = `Erro: ${error.message}`;
    }
});