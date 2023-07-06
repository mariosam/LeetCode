/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FairDistributionOfCookiesTest {

    @Test
	public void testFairDistributionOfCookies() throws Exception {
        //Test 1
        int want = 31;
        int got = FairDistributionOfCookies.distributeCookies( new int[]{8,15,10,20,8}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 7;
        got = FairDistributionOfCookies.distributeCookies( new int[]{6,1,3,2,2,4,1,2}, 3 );
        assertEquals(want, got);
	}

}
