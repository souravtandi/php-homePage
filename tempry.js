import React, { useEffect, useState, useRef } from 'react'
import styles from "./MenuFilter.module.scss";
import styles2 from "/styles/Custom_Package.module.scss";
import Image from 'next/image';
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowUpRightFromSquare, faAngleRight, faAngleLeft, faCircleInfo, faArrowLeftLong } from "@fortawesome/free-solid-svg-icons";
import Slider from "react-slick";
import { useAppMenu } from '$lib/menuContext';
import { generateDateOptions } from "utils/dateDropdown";
import Swal from "sweetalert2";

const MenuFilter = () => {
    const { PreSelectMenuNinjaBox } = useAppMenu();
    const [packages, setPackages] = useState();
    const [selectedType, setSelectedType] = useState('ninjaBox');
    const [showVeg, setShowVeg] = useState(true);
    const [selectedPackageType, setSelectedPackageType] = useState('');

    useEffect(() => {
        setPackages(PreSelectMenuNinjaBox);
    }, [])

    const packagesData = showVeg
        ? (packages?.veg || []).filter(item => item)
        : (packages?.nonVeg || []).filter(item => item);

    const filteredPackages = packagesData
        .map(item => ({
            ...item,
            price: selectedType === 'ninjaBuffet' ? item.price * 3 + 4002 : item.price,
        }))
        .filter(item => (selectedPackageType ? item.packageType === selectedPackageType : true))
        .sort((a, b) => a.price - b.price);
    const sliderRef = useRef(null);

    const setAllFilter = () => {
        setSelectedPackageType('');
        animateBtn();
        setBgColor("#FFC31A");
    };

    const setStarterFilter = () => {
        setSelectedPackageType('starterHeavy');
        animateBtn();
        setBgColor("#C09E41");
    };

    const setMainsFilter = () => {
        setSelectedPackageType('mains');
        animateBtn();
        setBgColor("#F54A4D");
    };

    const setNrFilter = () => {
        setSelectedPackageType('northIndian');
        animateBtn();
        setBgColor("#14B8B2");
    };

    const setAsianFilter = () => {
        setSelectedPackageType('asian');
        animateBtn();
        setBgColor("#FFC28C");
    };

    const setMcFilter = () => {
        setSelectedPackageType('multiCusine');
        animateBtn();
        setBgColor("#F07200");
    };


    const ninjaboxType = () => {
        setSelectedType("ninjaBox");
    }
    const ninjabuffyType = () => {
        setSelectedType("ninjaBuffet");
    }

    return (
        <div className={styles.menuBody} id="packages">
            <div className={styles.dropdownContainer}>
                <h4>Choice Of Service -</h4>
                <div className={styles.serviceToggle}>
                    <h6 style={{ background: selectedType !== "ninjaBox" ? "white" : "", color: selectedType !== "ninjaBox" ? "#A1A1A1" : "" }} onClick={ninjaboxType}>Ninja<span style={{ color: selectedType !== "ninjaBox" ? "#A1A1A1" : "" }}>Box</span></h6>
                    <h6 style={{ background: selectedType == "ninjaBox" ? "white" : "", color: selectedType == "ninjaBox" ? "#A1A1A1" : "" }} onClick={ninjabuffyType}>Ninja<span style={{ color: selectedType == "ninjaBox" ? "#A1A1A1" : "" }}>Buffy</span></h6>
                </div>
            </div>
            <div className={styles.mainFilterContainer}>
                <div className='ms-3'>
                    <div className={styles.vegSwitch} style={{ border: showVeg == true ? "1px solid #60B044" : "", background: showVeg == true ? "#E8FFEA" : "" }}>
                        <div>
                            <p>Veg Only</p>
                        </div>
                        <div>
                            <label className={styles.switch}>
                                <input type="checkbox" checked={showVeg} onChange={() => setShowVeg(!showVeg)} />
                                <span className={styles.slider}></span>
                            </label>
                        </div>
                    </div>
                    <div className={styles.filterBtns}>
                        <button onClick={setAllFilter} style={{ color: selectedPackageType === '' ? "white" : "black", background: selectedPackageType === '' ? "#FFC31A" : "white" }}>All</button>
                        <button onClick={setStarterFilter} style={{ color: selectedPackageType === 'starterHeavy' ? "white" : "black", background: selectedPackageType === 'starterHeavy' ? "#C09E41" : "white" }}>Starter Heavy</button>
                        <button onClick={setMainsFilter} style={{ color: selectedPackageType === 'mains' ? "white" : "black", background: selectedPackageType === 'mains' ? "#F54A4D" : "white" }}>Mains Only</button>
                        <button onClick={setNrFilter} style={{ color: selectedPackageType === 'northIndian' ? "white" : "black", background: selectedPackageType === 'northIndian' ? "#14B8B2" : "white" }}>North Indian</button>
                        <button onClick={setAsianFilter} style={{ color: selectedPackageType === 'asian' ? "white" : "black", background: selectedPackageType === 'asian' ? "#FFC28C" : "white" }}>Asian</button>
                        <button onClick={setMcFilter} style={{ color: selectedPackageType === 'multiCusine' ? "white" : "black", background: selectedPackageType === 'multiCusine' ? "#F07200" : "white" }}>Multi Cuisine</button>
                    </div>
                </div>
                <div className={styles.pkgsContainer}>
                    <div className={styles.cards}>
                        {filteredPackages.map((item, index) => (
                            <div key={index} className='mx-auto text-center'>
                                <div className={`${styles.card} ${isButtonClicked ? styles.animateCard : ''}`}>
                                    <h4>{item.name}</h4>
                                    <h5>{item.details}</h5>
                                    <h3>₹ {item.price.toLocaleString()} /-</h3>
                                    {selectedType === "ninjaBox" ? <h6> (For 10 Guests)</h6> :
                                        <h6>(For 30 Guests)</h6>}
                                    <div className={styles.smallimgTag}>
                                        <Image src={selectedType === "ninjaBox" ? "/ninja-box/packages/nbtag.png" : "/ninja-box/packages/tag2.png"} width={43.289} height={28.859} />
                                    </div>
                                    <div className={styles.pkgImage}>
                                        <Image src={item.img2} width={137.436} height={108.223} />
                                    </div>
                                    <div className={styles.viewButton}>
                                        <button >View Details & Customize</button>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    )
}

export default MenuFilter