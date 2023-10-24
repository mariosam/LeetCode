/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SoupServingsTest {

    @Test
	public void testSoupServings() throws Exception {
        //Test 1
        double want = 0.62500;
        double got = SoupServings.soupServings( 50 );
        assertEquals(want, got, 0);
        //Test 2
        want = 0.71875;
        got = SoupServings.soupServings( 100 );
        assertEquals(want, got, 0);
	}

}
