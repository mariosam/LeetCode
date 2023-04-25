/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import java.util.LinkedList;
import java.util.List;
import org.junit.Test;

public class KidsWithTheGreatestNumberOfCandiesTest {

    @Test
	public void testKidsWithTheGreatestNumberOfCandies() throws Exception {
        //Test 1
        List<Boolean> want = new LinkedList<>();
        want.add(true);
        want.add(true);
        want.add(true);
        want.add(false);
        want.add(true);
        List<Boolean> got = KidsWithTheGreatestNumberOfCandies.kidsWithCandies( new int[]{2,3,5,1,3}, 3 );
        assertEquals(want, got);
        //Test 2
        want = new LinkedList<>();
        want.add(true);
        want.add(false);
        want.add(false);
        want.add(false);
        want.add(false);
        got = KidsWithTheGreatestNumberOfCandies.kidsWithCandies( new int[]{4,2,1,1,2}, 1 );
        assertEquals(want, got);
        //Test 3
        want = new LinkedList<>();
        want.add(true);
        want.add(false);
        want.add(true);
        got = KidsWithTheGreatestNumberOfCandies.kidsWithCandies( new int[]{12,1,12}, 10 );
        assertEquals(want, got);
	}

}
