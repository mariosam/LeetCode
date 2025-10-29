/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CalculateMoneyInLeetcodeBankTest {

    @Test
	public void testCalculateMoneyInLeetcodeBank() throws Exception {
        //Test 1
        int want = 10;
        int got = CalculateMoneyInLeetcodeBank.totalMoney( 4 );
        assertEquals(want, got);
        //Test 2
        want = 37;
        got = CalculateMoneyInLeetcodeBank.totalMoney( 10 );
        assertEquals(want, got);
        //Test 3
        want = 96;
        got = CalculateMoneyInLeetcodeBank.totalMoney( 20 );
        assertEquals(want, got);
	}

}
