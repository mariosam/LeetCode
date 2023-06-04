/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ProfitableSchemesTest {

    @Test
	public void testProfitableSchemes() throws Exception {
        //Test 1
        int want = 2;
        int got = ProfitableSchemes.profitableSchemes( 5, 3, new int[]{2,2}, new int[]{2,3} );
        assertEquals(want, got);
        //Test 2
        want = 7;
        got = ProfitableSchemes.profitableSchemes( 10, 5, new int[]{2,3,5}, new int[]{6,7,8} );
        assertEquals(want, got);
	}

}
