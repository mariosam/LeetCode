/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class AsteroidCollisionTest {

    @Test
	public void testAsteroidCollision() throws Exception {
        //Test 1
        int[] want = new int[]{5,10};
        int[] got = AsteroidCollision.asteroidCollision( new int[]{5,10,-5} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{};
        got = AsteroidCollision.asteroidCollision( new int[]{8,-8} );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{10};
        got = AsteroidCollision.asteroidCollision( new int[]{10,2,-5} );
        assertArrayEquals(want, got);
	}

}
