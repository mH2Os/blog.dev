var posts = [
    {
        'date' : '2014-03-08',
        'title' : "Rissa's World",
        'content' : "Cupcake ipsum dolor sit amet biscuit cupcake marshmallow. \
        Croissant gummi bears jelly-o chocolate bar cake.Pudding brownie topping. Oat cake oat cake apple pie soufflé jelly-o topping macaroon. \
        Danish gummies chocolate. Sweet roll chocolate pudding icing cupcake sweet roll cake croissant lemon drops. \
        Danish gummies pastry cake candy lollipop gummies. \
        Cookie gingerbread toffee caramels icing cheesecake."
    },
    {
        'date' : '2014-05-30',
        'title'	: "Rissa's Music",
        'content' : "That est grinder qui galão, french press irish whipped ristretto brewed caffeine trifecta. \
        Sweet aged id spoon french press bar extra breve saucer.Iced eu filter, siphon dripper coffee acerbic chicory.  \
        Cortado, caffeine spoon dark, acerbic est chicory est single shot.Dark shop in cultivar organic cup grounds. \
        Cup roast, id coffee robusta caffeine, siphon cinnamon cup siphon single shot caramelization.\
		Skinny café au lait lungo beans instant so flavour. Plunger pot, flavour body cup eu barista lungo single shot flavour spoon shop black. \
		French press, at aged whipped cup decaffeinated extra variety. In, frappuccino extraction sit a flavour et rich affogato. \
		Et kopi-luwak con panna, qui extraction, skinny aromatic coffee so wings. \
		Wings qui robust breve irish affogato variety."
    },
    {
        'date' : '2014-03-09',
        'title' : "Rissa's Interests",
        'content' : "Skate ipsum dolor sit amet, nose-bump blunt bigspin slap maxwell soul skate Bare Cover body varial. \
        Vert tic-tac masonite Christ air coffin Schmitt Stix pressure flip.Lien air fastplant flypaper sick full pipe handplant Jim Phillips. \
        Hurricane mongo slappy axle Ed Templeton late ollie.Coping rocket air nosegrind Streets on Fire mute-air steps stoked. \
        Smith grind kickflip slap maxwell g-turn Jim Phillips pool acid drop. Skate or die gnarly Independent quarter pipe slide nosebone body varial. \
        50-50 nosepicker powerslide layback half-cab betty. Hip darkslide nosegrind g-turn poseur nose bump Cross Bones. \
        Nosegrind grab goofy footed Brian Brannon cess slide gnar bucket hang ten.Tic-tac airwalk crail slide nollie Wallows slap maxwell. \
        Wax hang ten full-cab camel back slap maxwell Steve Steadham. Durometer baseplate quarter pipe boned out bank. Ray Underhill 360 heel flip crailtap hang-up nose slide. \
        Betty hip manual quarter pipe tailslide. Boardslide no comply sick Pushead freestyle dude. Nose bump launch ramp rail hospital flip Skate Rock cess slide. \
        Rocket air slide vert slappy hanger. Crailtap fakie sponsored dude durometer. Transition skate or die John Carbis slam sick varial. \
        Deck Supersonic Skate Camp rail melancholy mute-air ollie north. Gnarly lipslide crooked grind slob air Randy Colvin ledge. \
        Wall ride masonite boardslide fast plant lien air."
    },
    {
        'date' : '2014-03-08',
        'title' : "Rissa's background",
        'content' : "Yellow Jack hands strike colors scallywag clipper aye chandler Chain Shot black spot come about. \
        Brig draught chase guns killick Shiver me timbers ho blow the man down landlubber or just lubber gabion piracy. \
        Sea Legs come about gangplank boatswain splice the main brace blow the man down bilge water pressgang grog blossom black jack.\
		Barbary Coast take a caulk scuttle man-of-war gun black jack boatswain keelhaul yawl ropes end. \
		Cutlass Shiver me timbers matey long boat Buccaneer lad Plate Fleet hornswaggle scourge of the seven seas tackle. \
		Reef sails topmast matey line Jolly Roger lad barkadeer pirate handsomely Gold Road.\
		Overhaul crimp booty ahoy grog mutiny Jack Tar skysail Arr scourge of the seven seas. \
		Gun parley chandler sutler tender maroon Davy Jones Locker rigging draft deadlights. \
		Brigantine chandler list bilged on her anchor hulk handsomely Shiver me timbers tackle scourge of the seven seas draft. "
    },
];

var html = '';
// foreach loop through post
posts.forEach(function(element) {
	var date = moment(element.date, "YYYYMMDD").fromNow();
	html += '<h2>' + element.title + '</h2>';
	html += '<p>' + element.content + '</p>';
	html += '<small>' + date + '</small>';
});

// grab post by id html tag
document.getElementById('posts').innerHTML = html;

