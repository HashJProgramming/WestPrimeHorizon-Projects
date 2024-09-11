(function () {
    "use strict";

    var regions = document.getElementsByName("region");
    var provinces = document.getElementsByName("province");
    var municipalities = document.getElementsByName("municipality");
    var barangays = document.getElementsByName("barangay");

    Array.prototype.forEach.call(regions, function(region, index) {

        $.post("assets/php/functions/data/get-region.php", function (data) {
            var regionData = JSON.parse(data);
            regions[index].innerHTML = "";
            regionData.forEach(function (data) {
                var option = document.createElement("option");
                option.value = data.regCode;
                option.text = data.regDesc;
                regions[index].appendChild(option);
            });
        });

        region.addEventListener("change", function () {
            $.post(
                "assets/php/functions/data/get-province.php",
                {
                    regCode: region.value,
                },
                function (data) {
                    var provinceData = JSON.parse(data);
                    provinces[index].innerHTML = "";
                    municipalities[index].innerHTML = "";
                    barangays[index].innerHTML = "";
                    provinceData.forEach(function (data) {
                        var option = document.createElement("option");
                        option.value = data.provCode;
                        option.text = data.provDesc;
                        provinces[index].appendChild(option);
                    });
                }
            );
        });

        region.addEventListener("click", function () {
            $.post(
                "assets/php/functions/data/get-province.php",
                {
                    regCode: region.value,
                },
                function (data) {
                    var provinceData = JSON.parse(data);
                    provinces[index].innerHTML = "";
                    municipalities[index].innerHTML = "";
                    barangays[index].innerHTML = "";
                    provinceData.forEach(function (data) {
                        var option = document.createElement("option");
                        option.value = data.provCode;
                        option.text = data.provDesc;
                        provinces[index].appendChild(option);
                    });
                }
            );
        });

    });

    Array.prototype.forEach.call(provinces, function(province, index) {
        province.addEventListener("change", function () {
            $.post(
                "assets/php/functions/data/get-municipality.php",
                {
                    regCode: regions[index].value,
                    provCode: province.value
                },
                function (data) {
                    var municipalityData = JSON.parse(data);
                    municipalities[index].innerHTML = "";
                    barangays[index].innerHTML = "";
                    municipalityData.forEach(function (data) {
                        var option = document.createElement("option");
                        option.value = data.citymunCode;
                        option.text = data.citymunDesc;
                        municipalities[index].appendChild(option);
                    });
                }
            );
        });
    });

    Array.prototype.forEach.call(municipalities, function(municipality, index) {
        municipality.addEventListener("change", function () {
            $.post(
                "assets/php/functions/data/get-barangay.php",
                {
                    regCode: regions[index].value,
                    provCode: provinces[index].value,
                    citymunCode: municipality.value
                },
                function (data) {
                    var barangayData = JSON.parse(data);
                    barangays[index].innerHTML = "";
                    barangayData.forEach(function (data) {
                        var option = document.createElement("option");
                        option.value = data.brgyCode;
                        option.text = data.brgyDesc;
                        barangays[index].appendChild(option);
                    });
                }
            );
        });
    });

})();