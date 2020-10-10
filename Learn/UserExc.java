import java.util.*;

class MyExc extends Exception{
  String Error;
  void MyExc(){
    Error="Not Good";
  }
}
class Demo{
  int sum(int a, int b) throws MyExc{
    {
      if(a==0 || b==0){
        throw new MyExc("wrong parameters");
      }
      return a+b;
    }
  }
  public static void main(String[] args) {
    Demo d=new Demo();
    try{
      d.sum(0,1);
    }
    catch (Exception e) {
      System.out.print(e);
    }
  }
}
