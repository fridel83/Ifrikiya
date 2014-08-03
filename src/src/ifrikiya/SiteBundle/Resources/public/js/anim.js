

imgPath = new Array;
SiClickGoTo = new Array;
version = navigator.appVersion.substring(0,1);
if (version >= 3)
{

	i0 = new Image;

	i0.src ="{{ asset('bundles/ifrikiyasite/images/livres/cameroun.jpg') }}";

	SiClickGoTo[0] = "#";

	imgPath[0] = i0.src;

	i1 = new Image;

	i1.src = "{{ asset('bundles/ifrikiyasite/images/livres/bakassi.jpg') }}";

	SiClickGoTo[1] = "#";

	imgPath[1] = i1.src;

	i2 = new Image;

	i2.src = "{{ asset('bundles/ifrikiyasite/images/livres/le cimetiere.jpg') }}";

	SiClickGoTo[2] = "Lien2";

	imgPath[2] = i2.src;

}

a = 0;

function StartAnim()

{

	if (version >= 3)

	{

		document.write('<a href="#" onclick="ImgDest();return(false)"><img src="../images/livres/cameroun.jpg" border="0" alt="Menu" name="defil" /></a>');

		defilimg();

	}

}

function ImgDest()

{

	document.location.href = SiClickGoTo[a-1];

}

function defilimg()
{
	if (a == 2)
	{
		a = 0;
	}
	if (version >= 3)
	{
		document.defil.src = imgPath[a];
		tempo3 = setTimeout("defilimg()",10000);
		a++;
	}

}