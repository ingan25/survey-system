package 병특;

import java.awt.*;
import java.awt.event.*;

public class CheckBoxExam extends Frame implements ItemListener, ActionListener{

Checkbox ck1=new Checkbox("사과");
		TextArea ta =new TextArea (3, 30); 
		Checkbox ck2=new Checkbox("딸기",true);
	Checkbox ck3=new Checkbox("키위");
	Checkbox ck4=new Checkbox("수박", true);	
Button ck5=new Button("        확인          ");
Button ck6=new Button("        취소          ");
Button ck10=new Button("        종료           ");
	public CheckBoxExam(){
	super("체크박스형");
	addWindowListener(new WindowHandler());
	Panel p=new Panel();
	 																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												
	
	Label ck7=new Label("이름");
	TextField a = new TextField(15);
	Button c =new Button("검색");
	Label ck8=new Label("전화번호");
	TextField b = new TextField(10);

	
	p.setBackground(Color.CYAN);
    ck5.setBackground(Color.LIGHT_GRAY);
    ck6.setBackground(Color.yellow);
    ck5.setSize(200, 500);
    ck6.setSize(200, 500);
	p.add(ck1);
	p.add(ck2);
	p.add(ck3);
	p.add(ck4);
    add(p,BorderLayout.NORTH);
    add(ta,BorderLayout.CENTER);
	add(p);
    p.add(ck5);
    p.add(ck6);
    p.add(ck10);
    p.add(ck7);
    p.add(a);
    p.add(c);
    p.add(ck8);
    p.add(b);
    p.add(ta);
      
    setSize(240,500);
    setVisible(true);
    ck1.addItemListener(this);
    ck2.addItemListener(this);
    ck3.addItemListener(this);
    ck4.addItemListener(this);
    ck5.addActionListener(this);
    ck6.addActionListener(this);
    ck10.addActionListener(this);
    }

public void itemStateChanged(ItemEvent ie) {
	if(ie.getStateChange() == ItemEvent.SELECTED)
		ta.append(ie.getItem() + "가 선택됨\n\n");
	else if(ie.getStateChange() == ItemEvent.DESELECTED)
		ta.append(ie.getItem() + "가 취소됨\n\n");}
   // else if(ie.getStateChange() == ItemEvent.CLICKED) 
	//ta.append(ie.getItem() + "가 취소됨\n\n");}
public void actionPerformed(ActionEvent d) {
	if(d.getSource()==ck10){
		System.exit(0);}
	//else if(d.getSource()==ActionEvent.)
			ta.append(d.getActionCommand() + "가 선택됨\n\n");
			//else if(d.getSource()==ck6) 
	
				ta.append(d.getActionCommand() + "가 선택됨\n\n");
		
	}
}

class WindowHandler extends WindowAdapter{
      public void windowClosing(WindowEvent e)
      {
            System.out.println("윈도우 창 닫기");
            System.exit(0);
      }

public static void main(String[] args){
	CheckBoxExam a = new CheckBoxExam();
}



}
