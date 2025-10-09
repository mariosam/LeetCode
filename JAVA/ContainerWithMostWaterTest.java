/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ContainerWithMostWaterTest {

    @Test
	public void testContainerWithMostWater() throws Exception {
        //Test 1
        long want = 49;
        long got =  ContainerWithMostWater.maxArea( new int[]{1,8,6,2,5,4,8,3,7} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got =  ContainerWithMostWater.maxArea( new int[]{1,1} );
        assertEquals(want, got);
	}

}
