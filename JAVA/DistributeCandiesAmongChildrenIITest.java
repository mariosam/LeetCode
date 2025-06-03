/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DistributeCandiesAmongChildrenIITest {

    @Test
	public void testDistributeCandiesAmongChildrenII() throws Exception {
        //Test 1
        long want = 3;
        long got = DistributeCandiesAmongChildrenII.distributeCandies( 5, 2 );
        assertEquals(want, got);
        //Test 2
        want = 10;
        got = DistributeCandiesAmongChildrenII.distributeCandies( 3, 3 );
        assertEquals(want, got);
	}

}
