/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LemonadeChangeTest {

    @Test
	public void testLemonadeChange() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = LemonadeChange.lemonadeChange( new int[]{5,5,5,10,20} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = LemonadeChange.lemonadeChange( new int[]{5,5,10,10,20} );
        assertEquals(want, got);
	}

}
