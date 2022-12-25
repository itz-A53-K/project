const generatePDF = async (name) => {
    const { PDFDocument, rgb } = PDFLib;
  
    const exBytes = await fetch("certificate.pdf").then((res) => {
      return res.arrayBuffer();
    });
  
    // const exFont = await fetch("SSanchez-Regular.ttf").then((res) => {
    //   return res.arrayBuffer();
    // });
  
    const pdfDoc = await PDFDocument.load(exBytes);
  
    pdfDoc.registerFontkit(fontkit);
    // const myFont = await pdfDoc.embedFont(exFont);
  
    const pages = pdfDoc.getPages();
    const firstPg = pages[0]
  
    firstPg.drawText(name,{
      x: 150,
      y: 270,
      size: 28,
    //   font: myFont,
      color: rgb(.2, 0.84, 0.67)
    })
  
    const uri = await pdfDoc.saveAsBase64({ dataUri: true });
    window.open(uri)
    document.querySelector("#mypdf").src = uri;
  };
  
  generatePDF(" jfghgfhffhfhfhfhffghghhggh")