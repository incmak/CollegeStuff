// Calculator in C# (Understanding Classes)

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Calculator

{
    public class calci
    {
        private double a, b;
        
        public double Add()
        {
            return a + b;
        }
        public double Sub()
        {
            return a - b;
        }
        public double Div()
        {
            return a / b;
        }
        public double Mul()
        {
            return a * b;
        }
        public void msg()
        {
            Console.WriteLine("Enter first number: ");
            a = Convert.ToDouble( Console.ReadLine() );

            Console.WriteLine("Enter second number: ");
            b = Convert.ToDouble(Console.ReadLine());
        }
    }
    class Program
    {
        static void Main(string[] args)
        { 
            Char ch = 'A';
            while (ch != 0 || ch != 'e')
            {
                Console.WriteLine(
                    "---------------------------------------\n" +
                    "---------------------------------------\n" +
                    "Please Enter Your Choice: \n" +
                    "Enter 1 for Adding 2 numbers\n" +
                    "Enter 2 for Subtracting 2 numbers\n" +
                    "Enter 3 for Multliplying 2 numbers\n" +
                    "Enter 4 for Divding 2 Numbers\n" +
                    "Enter 0 or e to exit\n" +
                    "---------------------------------------\n"+
                    "---------------------------------------\n");

                ch = Convert.ToChar(Console.ReadLine());

                calci c1 = new calci();
                switch (ch)
                {
                    case '1':
                        c1.msg();

                        Console.WriteLine($"Result after adding 2 numbers = " + c1.Add());
                        break;
                    case '2':
                        c1.msg();

                        Console.WriteLine($"Result after subtracting 2 numbers = " + c1.Sub());
                        break;
                    case '3':
                        c1.msg();

                        Console.WriteLine($"Result after Multiplying 2 numbers = " + c1.Mul());
                        break;
                    case '4':
                        c1.msg();

                        Console.WriteLine($"Result after Dividing 2 numbers = " + c1.Div());
                        break;
                    case '0':
                    case 'e':
                        Console.WriteLine("Exiting.........");
                        return;
                        
                    default:
                        break;
                }
            }
            //Console.ReadKey();
        }
    }
}
