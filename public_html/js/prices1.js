/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




function Prices() {
  var priceObj = {};

  priceObj.setPrices = function () 
  {
    this.set(".AsymmetricalJewelWrap", "$160");
    this.set(".AsymmetricalWrapinSteelGrey", "$200");
    this.set(".AuburnRustyRedShawl", "$250");
    this.set(".BlackCottonAsymetricalWrap", "Medium $160");
    this.set(".ClassicBlackMerinoTencelWrap", "Medium $200");
    this.set(".CottonandLinenCurtainPanel", "$240");
    this.set(".CountryFolkArtPillow", "$135");
    this.set(".CountyFolkArtWallHanging", "$110");
    this.set(".LargeBracketSet", "$48");
    this.set(".LargeSwag", "$240");
    this.set(".LobsterRedScarf", "$130");
    this.set(".NaturallyWhiteShawl", "$180");
    this.set(".OpenKnotweedPanelwithselfvalance", "$180");
    this.set(".OpenWeaveKnotweedCafeCurtains", "$120");
    this.set(".OpenWeaveKnotweedPanelwithRodPocket", "$180");
    this.set(".OpenWeaveKnotweedScarf", "$65");
    this.set(".OpenWeaveKnotweedShawl", "$225");
    this.set(".OpenWeaveKnotweedTableRunner", "$225");
    this.set(".OpenWeaveKnotweedWrap", "$180");
    this.set(".OpenWeaveSeaFoamShawl", "$180");
    this.set(".SeaGlassScarf", "$130");
    this.set(".Shelfbracketwithcurtainrodhook", "$48");
    this.set(".SmallBracketSet", "$32");
    this.set(".SmallSwag", "$225");
    this.set(".SteelGreyShawl", "$200");

//    this.set("", "");
      
    // mobile
//    this.set(".AsymmetricalJewelWrapM", "$160");
//    this.set(".AsymmetricalWrapinSteelGreyM", "$200");
//    this.set(".CottonandLinenCurtainPanelM", "$240");
//    this.set(".CountryFolkArtPillowM", "$135");
//    this.set(".CountyFolkArtWallHangingM", "$110");
//    this.set(".LargeBracketSetM", "$48");
//    this.set(".LargeSwagM", "$240");
//    this.set(".OpenKnotweedPanelwithselfvalanceM", "$180");
//    this.set(".OpenWeaveKnotweedCafeCurtainsM", "$120");
//    this.set(".OpenWeaveKnotweedPanelwithRodPocketM", "$180");
//    this.set(".OpenWeaveKnotweedScarfM", "$65");
//    this.set(".OpenWeaveKnotweedShawlM", "$225");
//    this.set(".OpenWeaveKnotweedTableRunnerM", "$225");
//    this.set(".OpenWeaveKnotweedWrapM", "$180");
//    this.set(".OpenWeaveSeaFoamShawlM", "$180");
//    this.set(".SeaGlassScarfM", "$130");
//    this.set(".ShelfbracketwithcurtainrodhookM", "$48");
//    this.set(".SmallBracketSetM", "$32");
//    this.set(".SmallSwagM", "$225");
//    this.set(".SteelGreyShawlM", "$200");

  },
  
  priceObj.setOld = function( id, price ) 
  {
    var e = document.getElementById(id);
    if ( e != null ) {
      e.innerHTML = price;
    } else {
      e = document.querySelector("price");
      if ( e != null ) {
        e.innerHTML = "???";
      }
    }
  }
  
  priceObj.set = function( className, price ) 
  {
    var x = document.querySelectorAll( className );
    if ( x == null ) return;
    var n = x.length;

    for (var i = 0; i < n; i++) {
      x[i].innerHTML = price;
    }
}

  
  
  return priceObj;
}

    