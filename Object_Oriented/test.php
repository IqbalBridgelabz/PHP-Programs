public class StockAccount { 
    private final String name;     // customer name
    private double cash;           // cash balance
    private int n;                 // number of stocks in portfolio
    private int[] shares;          // shares[i] = number of shares of stock i
    private String[] stocks;       // stocks[i] = symbol of stock i

    // build data structure from file
    public StockAccount(String filename) {
        In in = new In(filename);
        name = in.readLine(); 
        cash = in.readDouble(); 
        n = in.readInt(); 
        shares = new int[n]; 
        stocks = new String[n]; 
        for (int i = 0; i < n; i++) {
            shares[i] = in.readInt(); 
            stocks[i] = in.readString(); 
        } 
    } 

    // print a report to standard output
    public void printReport() { 
        StdOut.println(name); 
        double total = cash; 
        for (int i = 0; i < n; i++) {
            int amount = shares[i];
            double price = StockQuote.priceOf(stocks[i]);
            total += amount * price;
            StdOut.printf("%4d %5s ", amount, stocks[i]);
            StdOut.printf("%9.2f %11.2f\n", price, amount * price);
        }
        StdOut.printf("%21s %10.2f\n", "Cash: ", cash);
        StdOut.printf("%21s %10.2f\n", "Total:", total);
    } 

    // value of account
    public double valueOf() { 
        StdOut.println(name); 
        double total = cash; 
        for (int i = 0; i < n; i++) {
            int amount = shares[i];
            double price = StockQuote.priceOf(stocks[i]);
            total += amount * price;
        }
        return total;
    } 


    // test client
    public static void main(String[] args) { 
        String filename = args[0];
        StockAccount account = new StockAccount(filename); 
        account.printReport(); 
    } 
} 
