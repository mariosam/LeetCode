/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BulbSwitcherTest {

    @Test
	public void testBulbSwitcher() throws Exception {
        //Test 1
        int want = 1;
        int got = BulbSwitcher.bulbSwitch( 3 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = BulbSwitcher.bulbSwitch( 0 );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = BulbSwitcher.bulbSwitch( 1 );
        assertEquals(want, got);
	}

}
